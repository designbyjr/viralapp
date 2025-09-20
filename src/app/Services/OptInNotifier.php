<?php

namespace App\Services;

use App\Models\Participant;
use Illuminate\Support\Facades\Log;

class OptInNotifier
{
    public function sendConfirmation(Participant $participant): void
    {
        $channel = $participant->contact_method;
        $message = __('Your verification code for :app is :code', [
            'app' => config('app.name'),
            'code' => $participant->confirmation_code,
        ]);

        Log::info('Dispatching opt-in confirmation.', [
            'channel' => $channel,
            'contact' => $participant->contact_identifier,
            'message' => $message,
        ]);

        // Integration points for WhatsApp or Telegram bots can be implemented here.
    }
}
