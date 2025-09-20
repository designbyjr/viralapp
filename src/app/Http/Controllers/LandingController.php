<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class LandingController extends Controller
{
    public function show(Request $request): Response
    {
        $referrer = null;
        $referralCode = $request->query('ref');

        if ($referralCode) {
            $referrer = Participant::where('referral_code', $referralCode)->first();
        }

        return Inertia::render('Landing', [
            'customization' => config('referrals.landing'),
            'referrer' => $referrer ? [
                'display_name' => $referrer->display_name,
                'country' => $referrer->country,
                'referral_code' => $referrer->referral_code,
            ] : null,
            'share' => [
                'message_template' => config('referrals.share.message_template'),
                'terms' => config('referrals.terms_url'),
            ],
            'preselectedReferral' => $referralCode,
        ]);
    }
}
