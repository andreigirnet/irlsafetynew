@extends('front.app')

@section('content')
    <div class="py-16 lg:py-24 bg-surfaceLight min-h-screen text-textMain">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Hero Header -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center space-x-2 bg-emeraldLight border border-emeraldBorder px-3.5 py-1.5 rounded-full text-xs font-semibold text-emeraldPrimary mb-4">
                    <span class="w-2 h-2 rounded-full bg-sageAccent animate-pulse"></span>
                    <span>Direct Assistance</span>
                </div>
                <h1 class="font-display text-4xl sm:text-5xl font-extrabold text-textMain tracking-tight" x-text="data.contact">
                    Contact Us
                </h1>
            </div>

            <!-- Contact Card Container -->
            <div class="bg-cardLight border border-slate-200 rounded-2xl p-8 sm:p-12 shadow-sm">

                <!-- Contact Information Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-textMain">
                    
                    <div class="bg-surfaceLight border border-slate-200 rounded-xl p-6">
                        <span class="font-bold text-textMain block mb-1 text-xs uppercase tracking-wider text-textMuted">Operating Hours</span>
                        <p class="text-base font-semibold text-textMain">Monday to Sunday: 9am – 10pm</p>
                    </div>

                    <div class="bg-surfaceLight border border-slate-200 rounded-xl p-6">
                        <span class="font-bold text-textMain block mb-1 text-xs uppercase tracking-wider text-textMuted">Email Us</span>
                        <a href="mailto:info@progressive-irish-safety.ie" class="text-base font-bold text-emeraldPrimary hover:underline break-all">info@progressive-irish-safety.ie</a>
                    </div>

                    <div class="bg-surfaceLight border border-slate-200 rounded-xl p-6">
                        <span class="font-bold text-textMain block mb-1 text-xs uppercase tracking-wider text-textMuted">Call Us / WhatsApp</span>
                        <a href="tel:{{ config('global.phone') }}" class="text-base font-bold text-emeraldPrimary hover:underline">{{ config('global.phone') }}</a>
                    </div>

                    <div class="bg-surfaceLight border border-slate-200 rounded-xl p-6">
                        <span class="font-bold text-textMain block mb-1 text-xs uppercase tracking-wider text-textMuted">Registered Office</span>
                        <p class="text-base font-medium text-textMain">51 Bracken Road, Dublin, D18 CV48 Ireland</p>
                    </div>

                    <!-- Legal Entity Footer Banner -->
                    <div class="md:col-span-2 bg-emeraldLight border border-emeraldBorder rounded-xl p-6 text-center text-xs sm:text-sm font-semibold text-emeraldPrimary">
                        This website is owned and operated by PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED (CRO 822301).
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection