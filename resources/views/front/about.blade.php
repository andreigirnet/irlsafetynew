@extends('front.app')

@section('content')
    <div class="py-16 lg:py-24 bg-surfaceLight min-h-screen text-textMain">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h1 class="font-display text-4xl sm:text-5xl font-extrabold text-textMain tracking-tight mb-4">
                    About us
                </h1>
                <p class="text-lg text-textMuted leading-relaxed">
                    Ireland Safety Course offers online manual handling training for individuals and workers across Ireland, at <span class="text-emeraldPrimary font-bold">ireland-safetycourse.com</span>.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Who we are -->
                <div class="lg:col-span-2 bg-cardLight border border-slate-200 border-l-4 border-l-emeraldPrimary rounded-2xl p-8 sm:p-10 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-xl bg-emeraldLight border border-emeraldBorder flex items-center justify-center text-emeraldPrimary text-xl">
                                <i class="fa-solid fa-building"></i>
                            </div>
                        </div>
                        <h2 class="font-display font-bold text-2xl text-textMain mb-4">Who we are</h2>
                        <p class="text-textMuted text-base leading-relaxed mb-4">
                            Ireland Safety Course is an independent training provider operated by Progressive Velocity Fast Solutions Limited. We are not affiliated with, endorsed by, or an official representative of any government body or third-party brand.
                        </p>
                        <p class="text-textMuted text-base leading-relaxed mb-6">
                            Manual Handling is the course we currently offer. It covers safe lifting technique and workplace risk assessment through online theory slides, followed by a practical video that an instructor reviews.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-surfaceLight p-6 rounded-xl border border-slate-200">
                        <div class="flex flex-col space-y-1">
                            <span class="text-xs font-bold text-textMuted">Company name</span>
                            <span class="text-sm font-bold text-textMain">Progressive Velocity Fast Solutions Limited</span>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <span class="text-xs font-bold text-textMuted">Company number (CRO)</span>
                            <span class="text-base font-extrabold text-emeraldPrimary">822301</span>
                        </div>
                    </div>
                </div>

                <!-- How the course works -->
                <div class="lg:col-span-2 bg-cardLight border border-slate-200 rounded-2xl p-8 sm:p-10 shadow-sm">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-xl bg-emeraldLight border border-emeraldBorder flex items-center justify-center text-emeraldPrimary text-xl">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                    </div>
                    <h2 class="font-display font-bold text-2xl text-textMain mb-4">How the course works</h2>
                    <p class="text-textMuted text-base leading-relaxed mb-8">
                        You register an account, buy the course for €30, complete the online theory slides and pass the theory test. You then send a practical lifting video on WhatsApp for an instructor to review. Your certificate of completion is issued once the instructor approves your video. It is not issued automatically.
                    </p>

                    <div class="bg-surfaceLight border border-slate-200 rounded-xl p-6">
                        <h3 class="font-display font-bold text-lg text-textMain mb-6">The seven steps</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div class="bg-cardLight border border-slate-200 rounded-xl p-5 flex flex-col">
                                <div class="w-8 h-8 rounded-lg bg-emeraldLight border border-emeraldBorder text-emeraldPrimary font-extrabold text-xs flex items-center justify-center mb-4">01</div>
                                <h4 class="font-bold text-sm text-textMain mb-2">Register</h4>
                                <p class="text-xs text-textMuted leading-relaxed">Create an account with your email and a password.</p>
                            </div>
                            <div class="bg-cardLight border border-slate-200 rounded-xl p-5 flex flex-col">
                                <div class="w-8 h-8 rounded-lg bg-emeraldLight border border-emeraldBorder text-emeraldPrimary font-extrabold text-xs flex items-center justify-center mb-4">02</div>
                                <h4 class="font-bold text-sm text-textMain mb-2">Buy the course</h4>
                                <p class="text-xs text-textMuted leading-relaxed">Pay €30 online. No hidden fees.</p>
                            </div>
                            <div class="bg-cardLight border border-slate-200 rounded-xl p-5 flex flex-col">
                                <div class="w-8 h-8 rounded-lg bg-emeraldLight border border-emeraldBorder text-emeraldPrimary font-extrabold text-xs flex items-center justify-center mb-4">03</div>
                                <h4 class="font-bold text-sm text-textMain mb-2">Online slides</h4>
                                <p class="text-xs text-textMuted leading-relaxed">Work through the theory at your own pace.</p>
                            </div>
                            <div class="bg-cardLight border border-slate-200 rounded-xl p-5 flex flex-col">
                                <div class="w-8 h-8 rounded-lg bg-emeraldLight border border-emeraldBorder text-emeraldPrimary font-extrabold text-xs flex items-center justify-center mb-4">04</div>
                                <h4 class="font-bold text-sm text-textMain mb-2">Theory test</h4>
                                <p class="text-xs text-textMuted leading-relaxed">Answer the online test questions.</p>
                            </div>
                            <div class="bg-cardLight border border-slate-200 rounded-xl p-5 flex flex-col">
                                <div class="w-8 h-8 rounded-lg bg-emeraldLight border border-emeraldBorder text-emeraldPrimary font-extrabold text-xs flex items-center justify-center mb-4">05</div>
                                <h4 class="font-bold text-sm text-textMain mb-2">WhatsApp video</h4>
                                <p class="text-xs text-textMuted leading-relaxed">Record your lift and send it to +353899735295.</p>
                            </div>
                            <div class="bg-cardLight border border-slate-200 rounded-xl p-5 flex flex-col">
                                <div class="w-8 h-8 rounded-lg bg-emeraldLight border border-emeraldBorder text-emeraldPrimary font-extrabold text-xs flex items-center justify-center mb-4">06</div>
                                <h4 class="font-bold text-sm text-textMain mb-2">Instructor review</h4>
                                <p class="text-xs text-textMuted leading-relaxed">An instructor reviews your video.</p>
                            </div>
                            <div class="bg-cardLight border border-slate-200 rounded-xl p-5 flex flex-col">
                                <div class="w-8 h-8 rounded-lg bg-emeraldLight border border-emeraldBorder text-emeraldPrimary font-extrabold text-xs flex items-center justify-center mb-4">07</div>
                                <h4 class="font-bold text-sm text-textMain mb-2">Certificate issued</h4>
                                <p class="text-xs text-textMuted leading-relaxed">Your certificate of completion is issued after approval.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact and location -->
                <div class="lg:col-span-2 bg-cardLight border border-slate-200 rounded-2xl p-8 sm:p-10 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-xl bg-emeraldLight border border-emeraldBorder flex items-center justify-center text-emeraldPrimary text-xl">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                        </div>
                        <h2 class="font-display font-bold text-2xl text-textMain mb-4">Contact us</h2>
                        <p class="text-textMuted text-base leading-relaxed mb-6">
                            Call, message us on WhatsApp, or email us if you need help enrolling or sending your video.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-surfaceLight border border-slate-200 rounded-xl p-6 text-sm text-textMain leading-relaxed">
                            <strong class="block text-textMain font-bold mb-2">Registered address</strong>
                            Progressive Velocity Fast Solutions Limited<br>
                            51 Bracken Road,<br> Dublin, D18 CV48 <br> Ireland
                        </div>
                        <div class="bg-surfaceLight border border-slate-200 rounded-xl p-6 flex flex-col justify-center space-y-3 text-sm">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between border-b border-slate-200 pb-2.5 gap-1">
                                <span class="text-textMuted">Phone / WhatsApp:</span>
                                <a href="tel:+353899735295" class="font-bold text-emeraldPrimary hover:underline">+353899735295</a>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1">
                                <span class="text-textMuted">Email:</span>
                                <a href="mailto:info@ireland-safetycourse.com" class="font-bold text-emeraldPrimary hover:underline">info@ireland-safetycourse.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Policies -->
                <div class="lg:col-span-2 bg-cardLight border border-slate-200 rounded-2xl p-8 sm:p-10 shadow-sm">
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                        <div class="w-12 h-12 rounded-xl bg-emeraldLight border border-emeraldBorder flex items-center justify-center text-emeraldPrimary text-xl shrink-0">
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                        <div class="space-y-2">
                            <h2 class="font-display font-bold text-2xl text-textMain">Policies and further information</h2>
                            <p class="text-textMuted text-sm sm:text-base leading-relaxed mb-0">
                                Ireland Safety Course is operated by Progressive Velocity Fast Solutions Limited, registered in Ireland under company number 822301. Details of our services, the assessment process, payments and data handling are in our FAQs, Terms and Conditions, Refund Policy and Privacy Policy.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection