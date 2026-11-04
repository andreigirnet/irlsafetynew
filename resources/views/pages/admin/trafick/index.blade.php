
@extends('layouts.horizontal', [
    'title' => 'Traffic Monitor',
    'mode' => $mode ?? '',
    'demo' => $demo ?? ''
])

@section('content')

    @include('layouts.shared/page-title', [
        'sub_title' => 'Analytics',
        'page_title' => 'Traffic Monitor'
    ])

    {{-- Statistics --}}
    <div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5>Total Page Visits Today</h5>
                    <h2>{{ number_format($totalVisitors) }}</h2>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5>Google Ads Visits Today</h5>
                    <h2>{{ number_format($googleVisitors) }}</h2>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5>Unique IP Addresses Today</h5>
                    <h2>{{ number_format($uniqueIps) }}</h2>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5>Visits Outside Ireland</h5>
                    <h2>{{ number_format($foreignVisitors) }}</h2>
                </div>
            </div>
        </div>

    </div>

    {{-- Repeated IPs --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="header-title mb-3">
                        Repeated IP Addresses (Last 7 Days)
                    </h5>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>IP Address</th>
                                    <th>Total Visits</th>
                                    <th>Different GCLIDs</th>
                                    <th>First Seen</th>
                                    <th>Last Seen</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($repeatedIps as $ip)
                                    <tr>
                                        <td>
                                            <strong>{{ $ip->ip_address }}</strong>
                                        </td>
                                        <td>{{ $ip->total_visits }}</td>
                                        <td>
                                            @if($ip->different_gclids >= 2)
                                                <span class="badge bg-danger">
                                                    {{ $ip->different_gclids }}
                                                </span>
                                            @else
                                                {{ $ip->different_gclids }}
                                            @endif
                                        </td>
                                        <td>{{ $ip->first_seen }}</td>
                                        <td>{{ $ip->last_seen }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            No repeated IP addresses found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $repeatedIps->links('paginator') }}

                </div>
            </div>
        </div>
    </div>

    {{-- Multiple Google Ads Click IDs --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="header-title mb-3">
                        Multiple Google Ads Click IDs (Last 7 Days)
                    </h5>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>IP Address</th>
                                    <th>Distinct GCLIDs</th>
                                    <th>Total Visits</th>
                                    <th>Country</th>
                                    <th>Last Seen</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($multipleAdClicks as $ip)
                                    <tr>
                                        <td>{{ $ip->ip_address }}</td>
                                        <td>
                                            <span class="badge bg-warning text-dark">
                                                {{ $ip->ad_clicks }}
                                            </span>
                                        </td>
                                        <td>{{ $ip->total_visits }}</td>
                                        <td>{{ $ip->country ?? 'Unknown' }}</td>
                                        <td>{{ $ip->last_seen }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            No multiple Google Ads click IDs found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $multipleAdClicks->links('paginator') }}

                </div>
            </div>
        </div>
    </div>

    {{-- Latest Visitors --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="header-title mb-3">
                        Latest Visitor Activity
                    </h5>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>IP Address</th>
                                    <th>Country</th>
                                    <th>Device</th>
                                    <th>Browser</th>
                                    <th>OS</th>
                                    <th>Google Ads</th>
                                    <th>GCLID</th>
                                    <th>Campaign</th>
                                    <th>Page</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($visitors as $visitor)
                                    <tr>
                                        <td>
                                            {{ $visitor->created_at->format('d/m/Y H:i:s') }}
                                        </td>

                                        <td>{{ $visitor->ip_address }}</td>

                                        <td>{{ $visitor->country ?? 'Unknown' }}</td>

                                        <td>{{ $visitor->device_type ?? 'Unknown' }}</td>

                                        <td>{{ $visitor->browser ?? 'Unknown' }}</td>

                                        <td>{{ $visitor->operating_system ?? 'Unknown' }}</td>

                                        <td>
                                            @if($visitor->is_google_ads)
                                                <span class="badge bg-success">Google Ads</span>
                                            @else
                                                <span class="badge bg-secondary">Other</span>
                                            @endif
                                        </td>

                                        <td title="{{ $visitor->gclid }}">
                                            {{ $visitor->gclid ? \Illuminate\Support\Str::limit($visitor->gclid, 18) : '-' }}
                                        </td>

                                        <td>{{ $visitor->utm_campaign ?? '-' }}</td>

                                        <td>
                                            @if($visitor->requested_url)
                                                <a href="{{ $visitor->requested_url }}"
                                                   target="_blank"
                                                   rel="noopener noreferrer">
                                                    View page
                                                </a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            No visitors recorded.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $visitors->links('paginator') }}

                </div>
            </div>
        </div>
    </div>

@endsection
