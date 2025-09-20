<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'display_name',
        'country',
        'contact_method',
        'contact_identifier',
        'referral_code',
        'referrer_id',
        'confirmation_code',
        'confirmed_at',
        'fingerprint_hash',
        'share_count',
        'referral_count',
        'fraud_strikes',
        'meta',
    ];

    protected $casts = [
        'confirmed_at' => 'datetime',
        'meta' => 'array',
    ];

    public function referrer(): BelongsTo
    {
        return $this->belongsTo(self::class, 'referrer_id');
    }

    public function referrals(): HasMany
    {
        return $this->hasMany(self::class, 'referrer_id');
    }

    public function events(): HasMany
    {
        return $this->hasMany(ReferralEvent::class);
    }

    public function scopeConfirmed(Builder $query): Builder
    {
        return $query->whereNotNull('confirmed_at');
    }

    public function markAsConfirmed(): void
    {
        $this->forceFill([
            'confirmed_at' => now(),
            'confirmation_code' => Str::random(10),
        ])->save();
    }

    public function incrementReferralCount(): void
    {
        $this->increment('referral_count');
    }

    public function incrementShareCount(): void
    {
        $this->increment('share_count');
    }
}
