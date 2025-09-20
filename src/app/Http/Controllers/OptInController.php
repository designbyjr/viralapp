<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Services\FraudDetector;
use App\Services\OptInNotifier;
use App\Services\ReferralCodeGenerator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class OptInController extends Controller
{
    public function showVerifyForm(Request $request): RedirectResponse|Response
    {
        $participant = $this->resolvePendingParticipant($request);

        if (!$participant) {
            return redirect()->route('landing');
        }

        return Inertia::render('VerifyOptIn', [
            'participant' => [
                'id' => $participant->id,
                'contact_method' => $participant->contact_method,
                'contact_identifier' => $this->maskContact($participant->contact_identifier),
            ],
        ]);
    }

    public function store(
        Request $request,
        ReferralCodeGenerator $codeGenerator,
        FraudDetector $fraudDetector,
        OptInNotifier $optInNotifier,
    ): RedirectResponse {
        $validated = $request->validate([
            'display_name' => ['nullable', 'string', 'max:120'],
            'country' => ['required', 'string', 'max:120'],
            'contact_method' => ['required', 'in:whatsapp,telegram'],
            'contact_identifier' => ['required', 'string', 'max:191'],
            'fingerprint' => ['required', 'string'],
            'referral_code' => ['nullable', 'string'],
        ]);

        $fingerprintHash = hash('sha256', $validated['fingerprint']);

        $assessment = $fraudDetector->assess(
            $validated['contact_method'],
            $validated['contact_identifier'],
            $fingerprintHash,
        );

        if ($assessment['blocked']) {
            return back()->withErrors([
                'contact_identifier' => $assessment['reason'],
            ])->withInput();
        }

        $participant = $assessment['participant'] ?? new Participant();
        $participant->fill(Arr::only($validated, ['display_name', 'country', 'contact_method', 'contact_identifier']));

        if (!$participant->exists) {
            $participant->referral_code = $codeGenerator->generate();
        }

        $participant->fingerprint_hash = $fingerprintHash;
        $participant->confirmation_code = (string) random_int(100000, 999999);
        $participant->confirmed_at = null;

        if (!empty($validated['referral_code'])) {
            $referrer = Participant::where('referral_code', $validated['referral_code'])->first();
            if ($referrer && $referrer->isNot($participant)) {
                $participant->referrer()->associate($referrer);
            }
        }

        $participant->save();

        $optInNotifier->sendConfirmation($participant);

        $request->session()->put('pending_participant_id', $participant->id);

        return redirect()->route('verify.show')->with('message', __('We sent a confirmation code to :contact.', [
            'contact' => $this->maskContact($participant->contact_identifier),
        ]));
    }

    public function verify(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'code' => ['required', 'digits:6'],
        ]);

        $participant = $this->resolvePendingParticipant($request);

        if (!$participant) {
            return redirect()->route('landing')->withErrors([
                'code' => __('We could not find an opt-in attempt for that code.'),
            ]);
        }

        if (!hash_equals($participant->confirmation_code, $validated['code'])) {
            return back()->withErrors([
                'code' => __('The confirmation code you entered is invalid.'),
            ]);
        }

        $participant->markAsConfirmed();
        $participant->events()->create(['type' => 'confirmed']);

        if ($participant->referrer && $participant->referrer->confirmed_at) {
            $participant->referrer->incrementReferralCount();
            $participant->referrer->events()->create([
                'type' => 'referral',
                'payload' => ['referred_id' => $participant->id],
            ]);
        }

        $request->session()->forget('pending_participant_id');
        $request->session()->put('participant_id', $participant->id);

        return redirect()->route('leaderboard')->with('message', __('You are verified! Share your link to climb the leaderboard.'));
    }

    protected function resolvePendingParticipant(Request $request): ?Participant
    {
        $id = $request->session()->get('pending_participant_id', $request->session()->get('participant_id'));

        return $id ? Participant::find($id) : null;
    }

    protected function maskContact(string $value): string
    {
        $length = strlen($value);
        if ($length <= 4) {
            return Str::mask($value, '*', 0, $length);
        }

        return Str::substr($value, 0, 2).'***'.Str::substr($value, -2);
    }
}
