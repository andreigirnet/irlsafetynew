<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorLog extends Model
{
    use HasFactory;
    protected $fillable = [
        // IP and Google Ads
        'ip_address',
        'gclid',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_term',
        'utm_content',

        // Location
        'country',
        'city',
        'region',

        // Browser and device
        'browser',
        'operating_system',
        'device_type',

        // Browser information
        'browser_language',
        'accept_language',
        'timezone',
        'screen_resolution',

        // Visit information
        'landing_page',
        'requested_url',
        'referrer',
        'user_agent',
        'http_method',

        // Traffic classification
        'is_google_ads',

        // Session
        'session_id',
    ];

    protected $casts = [
        'is_google_ads' => 'boolean',
    ];
}
