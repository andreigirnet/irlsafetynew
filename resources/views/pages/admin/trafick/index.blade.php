```blade
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

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Total Visitors Today</h5>
                    <h2>{{ $totalVisitors }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Google Ads Visitors Today</h5>
                    <h2>{{ $googleVisitors }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Unique IP Addresses Today</h5>
                    <h2>{{ $uniqueIps }}</h2>
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
                                        <td>{{ $ip->ip_address }}</td>
                                        <td>
                                            <strong>{{ $ip->total_visits }}</strong>
                                        </td>
                                        <td>{{ $ip->different_gclids }}</td>
                                        <td>{{ $ip->first_seen }}</td>
                                        <td>{{ $ip->last_seen }}</td>
                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="5">
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

    {{-- Latest Visitors --}}
    <div class="row">
        <div class="col-xl-12">

            <div class="card">

                <div class="card-body">

                    <h5 class="header-title mb-3">
                        Latest Visitors
                    </h5>

                    <div class="table-responsive">

                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>IP Address</th>
                                    <th>GCLID</th>
                                    <th>Campaign</th>
                                    <th>Landing Page</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($visitors as $visitor)

                                    <tr>
                                        <td>{{ $visitor->created_at }}</td>

                                        <td>
                                            {{ $visitor->ip_address }}
                                        </td>

                                        <td>
                                            {{ $visitor->gclid ?? '-' }}
                                        </td>

                                        <td>
                                            {{ $visitor->utm_campaign ?? '-' }}
                                        </td>

                                        <td>
                                            <a href="{{ $visitor->landing_page }}"
                                               target="_blank"
                                               rel="noopener noreferrer">
                                                View page
                                            </a>
                                        </td>
                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="5">
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
```