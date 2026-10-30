@extends('front.app')

@section('content')
    <div class="py-16 lg:py-24 bg-surfaceLight min-h-screen text-textMain" data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-cardLight border border-slate-200 rounded-2xl shadow-sm overflow-hidden">

                <!-- Header Banner -->
                <div class="bg-[#022C22] text-white p-8 sm:p-12 relative border-b border-emerald-800">
                    <h1 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight mb-2">Terms & Conditions</h1>
                    <p class="text-slate-300 text-sm sm:text-base">{{ config('global.business_name') }}</p>
                    <p class="text-slate-400 text-xs mt-2">Last updated: 29 October 2026</p>
                </div>

                <!-- Body Content -->
                <div class="p-8 sm:p-12 space-y-10">

                    <div class="space-y-4">
                        <p class="text-textMuted text-base leading-relaxed">
                            Welcome to Progressive Irish Safety. These terms and conditions set out the rules for using our website at
                            <a href="https://www.progressive-irish-safety.ie/" target="_blank" rel="noopener noreferrer" class="text-emeraldPrimary font-semibold hover:underline">https://www.progressive-irish-safety.ie/</a>
                            and for buying and taking our online training. By using this website or buying a course, you agree to these terms. If you do not agree with any part of them, please stop using the website.
                        </p>

                        <div class="bg-surfaceLight border border-slate-200 rounded-xl p-6 mt-6">
                            <h3 class="font-bold text-sm uppercase tracking-wider text-textMuted mb-2">Company Information:</h3>
                            <p class="text-textMain text-base font-medium mb-0">
                                <strong>{{ config('global.business_name') }}</strong><br>
                                Company number (CRO): 822301<br>
                                Registered address: 51 Bracken Road, Dublin, D18 CV48, Ireland<br>
                                Phone: <a href="tel:{{ preg_replace('/[^+\d]/', '', config('global.phone')) }}" class="text-emeraldPrimary font-bold hover:underline">{{ config('global.phone') }}</a><br>
                                Email: <a href="mailto:info@progressive-irish-safety.ie" class="text-emeraldPrimary font-bold hover:underline">info@progressive-irish-safety.ie</a><br>
                                Online safety training provider.
                            </p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Who We Are:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Progressive Irish Safety is an independent training provider operated by Progressive Velocity Fast Solutions Limited. We are not affiliated with, endorsed by, or an official representative of any government body or third-party brand.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Services & Access:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            We provide online safety training for individuals and businesses. Our current course is Manual Handling Training. Buying a course gives you personal access to complete the training online through your account on our platform.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Price & Payment:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            The Manual Handling Training course costs €{{config('global.course_price')}}, paid once online at checkout. There are no hidden fees and no subscription or recurring charges. Payments are processed by our payment service provider, and we do not store your full card details.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Refunds & Cancellation:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Refunds and cancellations are governed by our Refund Policy, which is linked in the footer of this website. Nothing in these terms affects any statutory consumer rights you have.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Assessment Process:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            To complete the course you must study the online theory slides, pass the online theory test and upload a practical lifting video in your account. You may retake the theory test as many times as you need. An instructor reviews your video. If it is not approved, you will receive feedback and may upload a new video. Certificates are not issued automatically: they are issued only after you pass the theory test and an instructor approves your video.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Practical Video Uploads:
                        </h3>
                        <ul class="space-y-2 pl-4 text-textMuted text-base">
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span>The video must show you personally performing the lift. Do not submit videos of other people or videos that are not your own.</span></li>
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span>Film only yourself and make sure no other people are visible.</span></li>
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span>Lift only a safe item, such as a box or similar household item. You are responsible for your own safety while recording.</span></li>
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span>By uploading a video you agree that our instructors may view it to assess your technique. How we store and delete it is explained in our Privacy Policy, linked in the footer.</span></li>
                        </ul>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            The Certificate:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            The certificate is a private certificate of completion issued by Progressive Velocity Fast Solutions Limited. It shows that you completed our training. It is not a State-accredited qualification, and whether it meets the requirements of a particular workplace is for your employer to decide. If your employer needs a specific type of training or certificate, please check with them before you enrol. Certificates can be checked using the Verify Certificate page on our website.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Intellectual Property & Content Protection:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            All course content, training slides, graphics, text, and logos on this website are the intellectual property of {{ config('global.business_name') }}. Our training materials, slides and course contents may not be copied, redistributed, resold, or shared publicly.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            User Responsibilities:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            You agree to provide accurate information when you register and to complete the course yourself. Sharing your account, or letting anyone else take the training, the theory test or the practical assessment under your profile, is strictly prohibited.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Suspension & Termination:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            We may suspend or close an account, and withhold or withdraw a certificate, if we reasonably believe these terms have been broken, for example through account sharing, fraudulent or copied assessment videos, or sharing of course materials.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Limitation of Liability:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Our training is educational and does not replace workplace risk assessments or your employer's own safety procedures. To the extent permitted by law, we are not liable for indirect or consequential loss, or for injury or loss arising from how you carry out lifting or other tasks. Nothing in these terms excludes or limits liability that cannot be excluded or limited by law.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Privacy:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            How we collect and use your personal data, including your uploaded assessment video, is explained in our Privacy Policy, linked in the footer.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Changes to These Terms:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            We may update these terms from time to time. Changes are posted on this page with a revised date. The terms in force when you buy a course apply to that purchase.
                        </p>
                    </div>

                
                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Contact Us:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4 mb-0">
                            If you have any questions or need support regarding these terms, please use our live chat, call us on
                            <a href="tel:{{ preg_replace('/[^+\d]/', '', config('global.phone')) }}" class="text-emeraldPrimary font-semibold hover:underline">{{ config('global.phone') }}</a>,
                            or email
                            <a href="mailto:info@progressive-irish-safety.ie" class="text-emeraldPrimary font-semibold hover:underline">info@progressive-irish-safety.ie</a>.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection