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
        Schema::create('visitor_logs', function (Blueprint $table) {
        $table->id();

        // IP and Google Ads
        $table->string('ip_address', 45)->nullable()->index();
        $table->string('gclid', 255)->nullable()->index();

        $table->string('utm_source')->nullable();
        $table->string('utm_medium')->nullable();
        $table->string('utm_campaign')->nullable();
        $table->string('utm_term')->nullable();
        $table->string('utm_content')->nullable();

        // Location
        $table->string('country', 2)->nullable();
        $table->string('city')->nullable();
        $table->string('region')->nullable();

        // Browser and device
        $table->string('browser')->nullable();
        $table->string('operating_system')->nullable();
        $table->string('device_type')->nullable();

        // Browser information
        $table->string('browser_language')->nullable();
        $table->string('accept_language')->nullable();
        $table->string('timezone')->nullable();
        $table->string('screen_resolution')->nullable();

        // Visit information
        $table->text('landing_page')->nullable();
        $table->text('requested_url')->nullable();
        $table->text('referrer')->nullable();
        $table->text('user_agent')->nullable();

        $table->string('http_method', 10)->nullable();

        // Traffic classification
        $table->boolean('is_google_ads')->default(false);

        // Session
        $table->string('session_id', 100)->nullable()->index();

        $table->timestamps();

        // Indexes
        $table->index('created_at');
        $table->index('country');
        $table->index('device_type');
        $table->index('is_google_ads');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_logs');
    }
};
