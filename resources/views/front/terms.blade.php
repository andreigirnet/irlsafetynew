@extends('front.app')

@section('content')
    <div class="py-16 lg:py-24 bg-surfaceLight min-h-screen text-textMain" data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-cardLight border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
                
                <!-- Header Banner -->
                <div class="bg-[#022C22] text-white p-8 sm:p-12 relative border-b border-emerald-800">
                    <h1 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight mb-2">Terms & Conditions</h1>
                    <p class="text-slate-300 text-sm sm:text-base">{{ config('global.business_name') }}</p>
                </div>

                <!-- Body Content -->
                <div class="p-8 sm:p-12 space-y-10">

                    <div class="space-y-4">
                        <h2 class="font-display font-bold text-2xl text-textMain tracking-tight">Terms and Conditions</h2>
                        <p class="text-textMuted text-base leading-relaxed">
                            Welcome to Online Ireland Safety Training! These terms and conditions outline the rules and regulations for using our website at
                            <a href="https://www.progressive-irish-safety.ie/" target="_blank" class="text-emeraldPrimary font-semibold hover:underline">https://www.progressive-irish-safety.ie/</a>.
                            By accessing this platform, you agree to comply with these terms. If you do not agree with any part of these terms, please discontinue use of our website immediately.
                        </p>

                        <div class="bg-surfaceLight border border-slate-200 rounded-xl p-6 mt-6">
                            <h3 class="font-bold text-textMain text-sm uppercase tracking-wider text-textMuted mb-2">Company Information:</h3>
                            <p class="text-textMain text-base font-medium mb-0">
                                <strong>Online Safety Courses</strong><br>
                                Email: <a href="mailto:info@progressive-irish-safety.ie" class="text-emeraldPrimary font-bold hover:underline">info@progressive-irish-safety.ie</a><br>
                                Registered and licensed training provider.
                            </p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Services & Access:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            We provide professional, online safety training modules designed for individuals and businesses. Purchasing a course grants you personal access to complete your training online through our secure browser platform.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Intellectual Property & Content Protection:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            All course content, training slides, graphics, text, and logos hosted on this website are the exclusive intellectual property of {{ config('global.business_name') }}. None of our training materials, slides, or course contents may be copied, redistributed, resold, or shared publicly under any circumstances.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            User Responsibilities:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Users agree to provide accurate information during registration and to complete their training courses individually. Account sharing or allowing unauthorized individuals to access training modules under another user's profile is strictly prohibited.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Contact Us:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4 mb-0">
                            If you have any questions or require support regarding these terms and conditions, please reach out to our team at
                            <a href="mailto:info@progressive-irish-safety.ie" class="text-emeraldPrimary font-semibold hover:underline">info@progressive-irish-safety.ie</a>.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection