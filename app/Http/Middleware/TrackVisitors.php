<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\VisitorLog;
use GeoIp2\Database\Reader;

class TrackVisitors
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Only track public GET requests
        if (!$request->isMethod('GET') || !$request->hasSession()) {
            return $response;
        }

        // Ignore admin pages
        if ($request->is('admin/*') || $request->is('admin')) {
            return $response;
        }

        $session = $request->session();

        // Google Ads click ID
        $gclid = $request->query('gclid');

        if ($gclid) {
            $session->put('tracked_gclid', $gclid);
        } else {
            $gclid = $session->get('tracked_gclid');
        }

        $ua = $request->userAgent() ?? '';

        // Detect device
        $device = 'Desktop';

        if (preg_match('/ipad|tablet/i', $ua)) {
            $device = 'Tablet';
        } elseif (preg_match('/mobile|android|iphone/i', $ua)) {
            $device = 'Mobile';
        }

        // Detect browser
        $browser = 'Other';

        if (preg_match('/Edg\//i', $ua)) {
            $browser = 'Edge';
        } elseif (preg_match('/OPR\//i', $ua)) {
            $browser = 'Opera';
        } elseif (preg_match('/Chrome\//i', $ua)) {
            $browser = 'Chrome';
        } elseif (preg_match('/Firefox\//i', $ua)) {
            $browser = 'Firefox';
        } elseif (preg_match('/Safari\//i', $ua)) {
            $browser = 'Safari';
        }

        // Detect operating system
        $os = 'Other';

        if (preg_match('/Windows/i', $ua)) {
            $os = 'Windows';
        } elseif (preg_match('/Android/i', $ua)) {
            $os = 'Android';
        } elseif (preg_match('/iPhone|iPad/i', $ua)) {
            $os = 'iOS';
        } elseif (preg_match('/Mac OS/i', $ua)) {
            $os = 'macOS';
        } elseif (preg_match('/Linux/i', $ua)) {
            $os = 'Linux';
        }

        // Browser language
        $acceptLanguage = $request->header('Accept-Language');

        $browserLanguage = $acceptLanguage
            ? explode(',', $acceptLanguage)[0]
            : null;

        // Preserve first landing page
        if (!$session->has('first_landing_page')) {
            $session->put('first_landing_page', $request->fullUrl());
        }

        // Detect country using GeoLite2 database
        $country = null;

        try {
            $databasePath = storage_path(
                'app/geoip/GeoLite2-Country.mmdb'
            );

            if (file_exists($databasePath)) {
                $reader = new Reader($databasePath);

                try {
                    $record = $reader->country($request->ip());
                    $country = $record->country->isoCode;
                } finally {
                    $reader->close();
                }
            } else {
                \Log::warning('GeoIP database not found: ' . $databasePath);
            }

        } catch (\Throwable $e) {
            \Log::warning('GeoIP lookup failed', [
                'ip' => $request->ip(),
                'error' => $e->getMessage(),
            ]);
        }

        // Record every public page visit
        VisitorLog::create([
            'ip_address' => $request->ip(),
            'gclid' => $gclid,

            'utm_source' => $request->query('utm_source'),
            'utm_medium' => $request->query('utm_medium'),
            'utm_campaign' => $request->query('utm_campaign'),
            'utm_term' => $request->query('utm_term'),
            'utm_content' => $request->query('utm_content'),

            // GeoIP location
            'country' => $country,
            'city' => null,
            'region' => null,

            // Browser and device
            'browser' => $browser,
            'operating_system' => $os,
            'device_type' => $device,

            // Language
            'browser_language' => $browserLanguage,
            'accept_language' => $acceptLanguage,

            // Page information
            'landing_page' => $session->get('first_landing_page'),
            'requested_url' => $request->fullUrl(),
            'referrer' => $request->headers->get('referer'),
            'user_agent' => $ua,
            'http_method' => $request->method(),

            // Google Ads
            'is_google_ads' => !empty($gclid),

            // Session
            'session_id' => $session->getId(),
        ]);

        return $response;
    }
}
