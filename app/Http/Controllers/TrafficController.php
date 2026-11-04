<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorLog;
use Illuminate\Support\Facades\DB;

class TrafficController extends Controller
{
    public function index()
    {
        $today = now()->startOfDay();
        $last7Days = now()->subDays(7);

        // Total page visits today
        $totalVisitors = VisitorLog::where('created_at', '>=', $today)
            ->count();

        // Google Ads visits today
        $googleVisitors = VisitorLog::where('created_at', '>=', $today)
            ->where('is_google_ads', true)
            ->count();

        // Unique IP addresses today
        $uniqueIps = VisitorLog::where('created_at', '>=', $today)
            ->whereNotNull('ip_address')
            ->distinct()
            ->count('ip_address');

        // Visits from outside Ireland today
        $foreignVisitors = VisitorLog::where('created_at', '>=', $today)
            ->whereNotNull('country')
            ->where('country', '!=', 'IE')
            ->count();

        // Repeated IP addresses over the last 7 days
        $repeatedIps = VisitorLog::select(
            'ip_address',
            DB::raw('COUNT(*) as total_visits'),
            DB::raw('COUNT(DISTINCT gclid) as different_gclids'),
            DB::raw('MIN(created_at) as first_seen'),
            DB::raw('MAX(created_at) as last_seen')
        )
            ->where('created_at', '>=', $last7Days)
            ->whereNotNull('ip_address')
            ->groupBy('ip_address')
            ->havingRaw('COUNT(*) >= 2')
            ->orderByDesc('total_visits')
            ->paginate(20, ['*'], 'ips_page');

        // IP addresses with multiple distinct Google Ads click IDs
        $multipleAdClicks = VisitorLog::select(
            'ip_address',
            DB::raw('COUNT(DISTINCT gclid) as ad_clicks'),
            DB::raw('COUNT(*) as total_visits'),
            DB::raw('MAX(country) as country'),
            DB::raw('MAX(created_at) as last_seen')
        )
            ->where('created_at', '>=', $last7Days)
            ->whereNotNull('ip_address')
            ->whereNotNull('gclid')
            ->groupBy('ip_address')
            ->havingRaw('COUNT(DISTINCT gclid) >= 2')
            ->orderByDesc('ad_clicks')
            ->paginate(20, ['*'], 'clicks_page');

        // Latest visitor records
        $visitors = VisitorLog::latest()
            ->paginate(30, ['*'], 'visitors_page');

        return view('pages.admin.trafick.index', compact(
            'totalVisitors',
            'googleVisitors',
            'uniqueIps',
            'foreignVisitors',
            'repeatedIps',
            'multipleAdClicks',
            'visitors'
        ));
    }
}
