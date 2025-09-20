<?php

namespace App\Services;

use App\Models\Participant;
use Illuminate\Support\Facades\Log;

class FraudDetector
{
    public function assess(string $contactMethod, string $contactIdentifier, string $fingerprintHash): array
    {
        $existingContact = Participant::where('contact_method', $contactMethod)
            ->where('contact_identifier', $contactIdentifier)
            ->first();

        if ($existingContact && $existingContact->confirmed_at) {
            return [
                'blocked' => true,
                'reason' => 'This contact has already joined the campaign.',
                'participant' => $existingContact,
            ];
        }

        $recentAttempt = Participant::where('fingerprint_hash', $fingerprintHash)
            ->where('created_at', '>=', now()->subMinutes(5))
            ->first();

        if ($recentAttempt) {
            $recentAttempt->increment('fraud_strikes');
            Log::warning('Potential fraudulent opt-in detected.', [
                'participant_id' => $recentAttempt->id,
                'fingerprint_hash' => $fingerprintHash,
            ]);

            if ($recentAttempt->fraud_strikes >= 3) {
                return [
                    'blocked' => true,
                    'reason' => 'Too many opt-in attempts detected. Please wait before trying again.',
                    'participant' => $recentAttempt,
                ];
            }
        }

        return [
            'blocked' => false,
            'reason' => null,
            'participant' => $existingContact,
        ];
    }
}
