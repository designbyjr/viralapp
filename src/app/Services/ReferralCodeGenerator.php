<?php

namespace App\Services;

use App\Models\Participant;
use Illuminate\Support\Str;

class ReferralCodeGenerator
{
    public function generate(): string
    {
        do {
            $code = Str::lower(Str::random(8));
        } while (Participant::where('referral_code', $code)->exists());

        return $code;
    }
}
