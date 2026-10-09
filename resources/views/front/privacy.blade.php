@extends('front.app')

@section('content')
    <div class="py-16 lg:py-24 bg-surfaceLight min-h-screen text-textMain" data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-cardLight border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
                
                <!-- Header Banner -->
                <div class="bg-[#022C22] text-white p-8 sm:p-12 relative border-b border-emerald-800">
                    <h1 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight mb-2">Privacy Policy</h1>
                    <p class="text-slate-300 text-sm sm:text-base">{{ config('global.business_name') }}</p>
                </div>

                <!-- Session Feedback Alerts -->
                <div class="px-8 sm:px-12 pt-8">
                    @if(session('success'))
                        <div class="bg-emeraldLight text-emeraldPrimary p-4 rounded-xl mb-6 border border-emeraldBorder text-sm font-semibold">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="bg-rose-50 text-rose-800 p-4 rounded-xl mb-6 border border-rose-200 text-sm">
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <!-- Body Content -->
                <div class="p-8 sm:p-12 pt-4 space-y-10">

                    <div class="space-y-4">
                        <h2 class="font-display font-bold text-2xl text-textMain tracking-tight">Privacy Policy & Data Protection</h2>
                        <p class="text-textMuted text-base leading-relaxed">
                            At <strong>{{ config('global.business_name') }}</strong> ("we," "our," or "us"), we are committed to safeguarding your privacy and ensuring that your personal data is protected. This Privacy Policy outlines how we collect, use, disclose, and protect information when you visit our website
                            <a href="https://www.ireland-safetycourse.com/" target="_blank" class="text-emeraldPrimary font-semibold hover:underline">https://www.ireland-safetycourse.com/</a>
                            and utilize our online training services.
                        </p>

                        <div class="bg-surfaceLight border border-slate-200 rounded-xl p-6 mt-6">
                            <h3 class="font-bold text-textMain text-sm uppercase tracking-wider text-textMuted mb-2">Data Controller Contact:</h3>
                            <p class="text-textMain text-base font-medium mb-0">
                                <strong>{{ config('global.business_name') }}</strong><br>
                                Support Email: <a href="mailto:info@ireland-safetycourse.com" class="text-emeraldPrimary font-bold hover:underline">info@ireland-safetycourse.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Information We Collect:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            We may collect personal information that you voluntarily provide to us when registering for a course, purchasing services, participating in practical assessments, or contacting support. This includes:
                        </p>
                        <ul class="space-y-2 pl-4 text-textMuted text-base">
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span><strong>Identity Data:</strong> Full name and contact credentials.</span></li>
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span><strong>Contact Information:</strong> Email address and telephone number.</span></li>
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span><strong>Transaction & Payment Data:</strong> Details regarding course purchases (processed securely through encrypted payment gateways).</span></li>
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span><strong>Assessment & Media Data:</strong> Practical session recordings, video assessments, photographs, or chat logs are submitted via WhatsApp (<a href="https://www.whatsapp.com/legal/privacy-policy" target="_blank" class="text-emeraldPrimary underline">WhatsApp Privacy Policy</a>).</span></li>
                        </ul>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            How We Use Your Information:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            The information we collect is utilized for business and educational purposes, including:
                        </p>
                        <ul class="space-y-2 pl-4 text-textMuted text-base">
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span>Processing your course registration, verifying practical competency via video assessments, and issuing certificates of completion.</span></li>
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span>Fulfilling accounting and regulatory tax obligations.</span></li>
                            <li class="flex items-start"><span class="text-emeraldPrimary font-bold mr-2">•</span><span>Improving website performance and advertising relevance.</span></li>
                        </ul>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Data Sharing and Disclosure:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            We do not sell, trade or rent your personal information or assessment videos. We use service providers for payment processing, website hosting and assessment communications. We use WhatsApp to receive practical assessment videos and communicate assessment feedback. When you submit a video, we receive your video, telephone number, any visible profile information and accompanying messages. The messaging provider also processes information in accordance with its own privacy policy. Deleting a video from devices and systems under our control does not necessarily delete information retained by the messaging provider or copies stored on your device.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Your Data Protection Rights:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Depending on your jurisdiction (such as the GDPR framework in Europe), you have rights regarding your personal data, including the right to access, correct, or request deletion of your personal information stored on our systems. You can submit a request below.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Assessment Video Data:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Practical video tests submitted via WhatsApp for grading and course completion. The video is retained only until the practical assessment has been reviewed and completed. After the assessment is completed, the video will be deleted from our devices and systems where it is under our control. We retain the assessment result and certification records separately where necessary.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Policy Updates:
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            We may update this Privacy Policy from time to time to reflect operational changes or requirements. Any modifications will be posted directly on this page with a revised update date.
                        </p>
                    </div>

                    <!-- Data Removal Request Form Section -->
                    <div class="pt-6 border-t border-slate-200 space-y-6">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            Request Data Removal (Right to be Forgotten)
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            If you wish to request the deletion or removal of your personal data from our active databases, please fill out the secure form below. We will process your request in accordance with applicable data protection regulations.
                        </p>

                        <div class="bg-surfaceLight border border-slate-200 rounded-2xl p-6 sm:p-8">
                            <form action="{{ route('privacy.data-removal.submit') }}" method="POST" class="space-y-5">
                                @csrf

                                <div>
                                    <label for="name" class="block text-xs font-bold uppercase tracking-wider text-textMuted mb-2">Full Name</label>
                                    <input type="text" id="name" name="name" class="w-full bg-cardLight border border-slate-200 rounded-xl px-4 py-3 text-textMain text-sm focus:outline-none focus:border-emeraldPrimary transition" required placeholder="Enter your full name">
                                </div>

                                <div>
                                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-textMuted mb-2">Email Address</label>
                                    <input type="email" id="email" name="email" class="w-full bg-cardLight border border-slate-200 rounded-xl px-4 py-3 text-textMain text-sm focus:outline-none focus:border-emeraldPrimary transition" required placeholder="Enter your registered email">
                                </div>

                                <div>
                                    <label for="reason" class="block text-xs font-bold uppercase tracking-wider text-textMuted mb-2">Reason for Request / Specific Data to Remove</label>
                                    <textarea id="reason" name="reason" class="w-full bg-cardLight border border-slate-200 rounded-xl px-4 py-3 text-textMain text-sm focus:outline-none focus:border-emeraldPrimary transition min-h-[120px] resize-y" placeholder="Please specify the details or context regarding your data removal request..."></textarea>
                                </div>

                                <button type="submit" class="bg-emeraldPrimary hover:bg-emeraldHover text-white font-semibold px-6 py-3.5 rounded-xl transition-all shadow-md shadow-emeraldPrimary/20 w-full sm:w-auto">
                                    Submit Removal Request
                                </button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection