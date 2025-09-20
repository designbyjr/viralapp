<?php

namespace App\Http\Middleware;

use App\Models\Participant;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     */
    protected $rootView = 'app';

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $participant = null;
        $participantId = $request->session()->get('participant_id');

        if ($participantId) {
            $participant = Participant::select('id', 'display_name', 'referral_code')
                ->find($participantId);
        }

        return [
            ...parent::share($request),
            'app' => [
                'name' => config('app.name'),
            ],
            'flash' => [
                'message' => fn () => $request->session()->get('message'),
            ],
            'participant' => $participant,
            'referrals' => [
                'share' => config('referrals.share'),
                'prizes' => config('referrals.prizes'),
            ],
        ];
    }
}
