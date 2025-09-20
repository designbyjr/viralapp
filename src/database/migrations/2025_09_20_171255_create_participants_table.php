<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('display_name')->nullable();
            $table->string('country');
            $table->enum('contact_method', ['whatsapp', 'telegram']);
            $table->string('contact_identifier');
            $table->string('referral_code')->unique();
            $table->foreignId('referrer_id')->nullable()->constrained('participants')->nullOnDelete();
            $table->string('confirmation_code');
            $table->timestamp('confirmed_at')->nullable();
            $table->string('fingerprint_hash');
            $table->unsignedInteger('share_count')->default(0);
            $table->unsignedInteger('referral_count')->default(0);
            $table->unsignedInteger('fraud_strikes')->default(0);
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->unique(['contact_method', 'contact_identifier']);
            $table->index('fingerprint_hash');
            $table->index('confirmed_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
