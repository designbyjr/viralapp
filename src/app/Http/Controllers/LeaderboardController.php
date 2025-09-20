<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class LeaderboardController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $currentParticipant = null;
        $participantId = $request->session()->get('participant_id');

        if ($participantId) {
            $currentParticipant = Participant::find($participantId);
        }

        $leaders = Participant::confirmed()
            ->select(['id', 'display_name', 'country', 'referral_code', 'referral_count', 'share_count'])
            ->orderByDesc('referral_count')
            ->orderByDesc('share_count')
            ->limit(20)
            ->get()
            ->map(function (Participant $participant) use ($currentParticipant) {
                return [
                    'id' => $participant->id,
                    'display_name' => $participant->display_name ?? __('Anonymous Champion'),
                    'country' => $participant->country,
                    'referral_count' => $participant->referral_count,
                    'share_count' => $participant->share_count,
                    'is_current_user' => $currentParticipant && $participant->id === $currentParticipant->id,
                ];
            });

        $shareLink = $currentParticipant ? route('landing', ['ref' => $currentParticipant->referral_code]) : null;
        $shareMessage = null;

        if ($shareLink) {
            $shareMessage = str_replace('{link}', $shareLink, config('referrals.share.message_template'));
        }

        return Inertia::render('Leaderboard', [
            'leaders' => $leaders,
            'prizes' => config('referrals.prizes'),
            'shareLink' => $shareLink,
            'shareMessage' => $shareMessage,
            'currentParticipant' => $currentParticipant ? [
                'display_name' => $currentParticipant->display_name ?? __('You'),
                'country' => $currentParticipant->country,
                'referral_count' => $currentParticipant->referral_count,
                'share_count' => $currentParticipant->share_count,
                'referral_code' => $currentParticipant->referral_code,
            ] : null,
        ]);
    }
}
