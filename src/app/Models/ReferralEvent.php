<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReferralEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'participant_id',
        'type',
        'payload',
    ];

    protected $casts = [
        'payload' => 'array',
    ];

    public function participant(): BelongsTo
    {
        return $this->belongsTo(Participant::class);
    }
}
