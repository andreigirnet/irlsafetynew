@extends('front.app')

@section('content')
    <div class="py-16 lg:py-24 bg-surfaceLight min-h-screen text-textMain">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-cardLight border border-slate-200 rounded-2xl shadow-sm overflow-hidden">

                <!-- Header Banner -->
                <div class="bg-[#022C22] text-white p-8 sm:p-12 relative border-b border-emerald-800">
                    <h1 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight mb-2">Refund Policy</h1>
                    <p class="text-slate-300 text-sm sm:text-base">{{ config('global.business_name') }}</p>
                </div>

                <!-- Body Content -->
                <div class="p-8 sm:p-12 space-y-10">

                    <div class="space-y-4">
                        <h2 class="font-display font-bold text-2xl text-textMain tracking-tight">Refund and cancellation policy</h2>
                        <p class="text-textMuted text-base leading-relaxed">
                            This policy explains how refunds work for the online training course sold by <strong>{{ config('global.business_name') }}</strong> at
                            <a href="https://www.progressive-irish-safety.ie/" target="_blank" rel="noopener noreferrer" class="text-emeraldPrimary font-semibold hover:underline">https://www.progressive-irish-safety.ie/</a>.
                            Please read the conditions below before you buy.
                        </p>

                        <div class="bg-surfaceLight border border-slate-200 rounded-xl p-6 mt-6">
                            <h3 class="font-bold text-textMain text-sm mb-2">Who to contact about refunds</h3>
                            <p class="text-textMain text-base font-medium mb-0 leading-relaxed">
                                <strong>Progressive Velocity Fast Solutions Limited</strong> (trading as Progressive Irish Safety)<br>
                                Company number (CRO): 822301<br>
                                Registered address: 51 Bracken Road, Dublin, D18 CV48, Ireland<br>
                                Email: <a href="mailto:info@progressive-irish-safety.ie" class="text-emeraldPrimary font-bold hover:underline">info@progressive-irish-safety.ie</a>
                            </p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            When you can get a refund
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Refund requests are assessed under the following conditions:
                        </p>
                        <ul class="space-y-3 pl-4 text-textMuted text-base">
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span><strong>Change of mind:</strong> You may request a refund within 14 days of purchase, as long as you have not completed the course and no certificate has been issued.</span></li>
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span><strong>Employer requirements:</strong> Please check your employer's training requirements before you buy. If your employer tells you this course does not meet their requirements, you may request a refund within 14 days of purchase, as long as you have not completed the course and no certificate has been issued.</span></li>
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span><strong>Duplicate charges:</strong> If you were charged twice by mistake or there was another billing error through our payment provider (Stripe), we will refund the extra charge promptly once we have verified it.</span></li>
                        </ul>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            When a refund is not available
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Once you have completed the course, or a certificate of completion has been issued, we cannot refund the course fee. This applies to the change of mind and employer requirements cases above. Your statutory consumer rights are not affected by this policy.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            How to request a refund
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Email us at
                            <a href="mailto:info@progressive-irish-safety.ie" class="text-emeraldPrimary font-semibold hover:underline">info@progressive-irish-safety.ie</a>
                            with your full name, the email address you registered with, your transaction reference and the reason for your request. If your request relates to your employer's requirements, please include what your employer told you. Approved refunds are paid back to the card you used to pay.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Processing times
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4 mb-0">
                            Refund requests must be made within the 14-day period described above. After we approve a refund, please allow 5 to 10 business days for it to appear on your card statement, depending on your bank or card issuer.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection