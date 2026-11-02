@extends('layouts.horizontal', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18547639106"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-18547639106');
    </script>
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Your payment has been successfully processed.</div>
        <a href="{{route('package.index')}}" class="sale-button" style="margin-top: 30px">View courses</a>
    </div>
    <script src="{{asset('js/adminPage.js')}}"></script>
@endsection
