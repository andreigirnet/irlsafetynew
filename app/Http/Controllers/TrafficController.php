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

        // Total visitors today
        $totalVisitors = VisitorLog::where('created_at', '>=', $today)
            ->count();

        // Google Ads visitors today
        $googleVisitors = VisitorLog::where('created_at', '>=', $today)
            ->whereNotNull('gclid')
            ->count();

        // Unique IP addresses today
        $uniqueIps = VisitorLog::where('created_at', '>=', $today)
            ->distinct('ip_address')
            ->count('ip_address');

        // Repeated IP addresses over the last 7 days
        $repeatedIps = VisitorLog::select(
            'ip_address',
            DB::raw('COUNT(*) as total_visits'),
            DB::raw('COUNT(DISTINCT gclid) as different_gclids'),
            DB::raw('MIN(created_at) as first_seen'),
            DB::raw('MAX(created_at) as last_seen')
        )
            ->where('created_at', '>=', now()->subDays(7))
            ->whereNotNull('ip_address')
            ->groupBy('ip_address')
            ->havingRaw('COUNT(*) >= 2')
            ->orderByDesc('total_visits')
            ->paginate(20, ['*'], 'ips_page');

        // Latest visitor records
        $visitors = VisitorLog::latest()
            ->paginate(20, ['*'], 'visitors_page');

        return view('pages.admin.trafick.index', compact(
            'totalVisitors',
            'googleVisitors',
            'uniqueIps',
            'repeatedIps',
            'visitors'
        ));
    }
}