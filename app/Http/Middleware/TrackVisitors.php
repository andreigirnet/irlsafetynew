<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\VisitorLog;

class TrackVisitors
{
    public function handle(Request $request, Closure $next)
    {
        // Process the request normally first
        $response = $next($request);

        // Only track normal GET page visits
        if (!$request->isMethod('GET') || !$request->hasSession()) {
            return $response;
        }

        // Avoid tracking admin pages
        if ($request->is('admin/*')) {
            return $response;
        }

        $session = $request->session();

        $gclid = $request->query('gclid');
        $lastGclid = $session->get('tracked_gclid');
        $alreadyTracked = $session->get('visitor_tracked', false);

        // Track first visit or a new Google Ads click
        if (!$alreadyTracked || ($gclid && $gclid !== $lastGclid)) {

            VisitorLog::create([
                'ip_address' => $request->ip(),

                'gclid' => $gclid,

                'utm_source' => $request->query('utm_source'),
                'utm_medium' => $request->query('utm_medium'),
                'utm_campaign' => $request->query('utm_campaign'),
                'utm_term' => $request->query('utm_term'),
                'utm_content' => $request->query('utm_content'),

                'landing_page' => $request->fullUrl(),
                'referrer' => $request->headers->get('referer'),
                'user_agent' => $request->userAgent(),

                'session_id' => $session->getId(),
            ]);

            $session->put('visitor_tracked', true);

            if ($gclid) {
                $session->put('tracked_gclid', $gclid);
            }
        }

        return $response;
    }
}