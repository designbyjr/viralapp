<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ShareController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $participant = $this->resolveParticipant($request);

        if (!$participant) {
            return response()->json(['message' => __('You need to opt-in before sharing.')], 422);
        }

        $participant->incrementShareCount();
        $participant->events()->create([
            'type' => 'share',
            'payload' => [
                'user_agent' => $request->userAgent(),
                'ip' => $request->ip(),
            ],
        ]);

        return response()->json(['message' => __('Share recorded successfully.')]);
    }

    protected function resolveParticipant(Request $request): ?Participant
    {
        $id = $request->session()->get('participant_id');

        if ($id) {
            return Participant::find($id);
        }

        if ($request->filled('referral_code')) {
            return Participant::where('referral_code', $request->string('referral_code'))->first();
        }

        return null;
    }
}
