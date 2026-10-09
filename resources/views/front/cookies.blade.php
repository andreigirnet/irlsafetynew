@extends('front.app')

@section('content')
    <div class="py-16 lg:py-24 bg-surfaceLight min-h-screen text-textMain" data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-cardLight border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
                
                <!-- Header Banner -->
                <div class="bg-[#022C22] text-white p-8 sm:p-12 relative border-b border-emerald-800">
                    <h1 class="font-display text-3xl sm:text-4xl font-extrabold tracking-tight mb-2">Cookie Policy</h1>
                    <p class="text-slate-300 text-sm sm:text-base">{{ config('global.business_name') }}</p>
                </div>

                <!-- Body Content -->
                <div class="p-8 sm:p-12 space-y-10">

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            1. What Are Cookies?
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Cookies are small text files stored on your device when you visit a website. They help websites function correctly, maintain security, remember preferences, and understand how visitors interact with the platform.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            2. How We Use Cookies
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            {{ config('global.business_name') }} uses cookies and similar technologies for essential website functionality, security, session management, and customer support.
                        </p>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Our website may also utilize third-party services, including Google and Chatway, which may place cookies or similar technologies to provide analytics, communications, and interactive support services.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            3. Overview of Cookies Used
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            The table below breaks down the specific cookies used on our platform, what they do, how long they stay on your device, and their category:
                        </p>
                        
                        <div class="overflow-x-auto rounded-xl border border-slate-200 mt-4">
                            <table class="w-full text-left text-sm text-textMain border-collapse">
                                <thead>
                                    <tr class="bg-surfaceLight border-b border-slate-200 text-textMain font-bold">
                                        <th class="p-4">Cookie Name</th>
                                        <th class="p-4">Category</th>
                                        <th class="p-4">Duration</th>
                                        <th class="p-4">What it does (Plain English)</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 bg-cardLight">
                                    <tr class="hover:bg-surfaceLight transition">
                                        <td class="p-4 font-mono text-xs text-emeraldPrimary"><code>__cf_bm</code>, <code>cf_clearance</code></td>
                                        <td class="p-4"><span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-md bg-emeraldLight text-emeraldPrimary border border-emeraldBorder">Necessary</span></td>
                                        <td class="p-4 text-textMuted">30 mins – 1 year</td>
                                        <td class="p-4 text-textMuted">Protects the website from malicious bots and verifies that you are a real human visitor.</td>
                                    </tr>
                                    <tr class="hover:bg-surfaceLight transition">
                                        <td class="p-4 font-mono text-xs text-emeraldPrimary"><code>jwt.token</code>, <code>XSRF-TOKEN</code>, <code>id</code>, <code>normal.handling.online.session</code></td>
                                        <td class="p-4"><span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-md bg-emeraldLight text-emeraldPrimary border border-emeraldBorder">Necessary</span></td>
                                        <td class="p-4 text-textMuted">Session – 1 year</td>
                                        <td class="p-4 text-textMuted">Keeps you safely logged in and protects your account data from unauthorized cross-site tampering.</td>
                                    </tr>
                                    <tr class="hover:bg-surfaceLight transition">
                                        <td class="p-4 font-mono text-xs text-emeraldPrimary"><code>chatway.delivery.url</code>, <code>chatway.referrer.url</code></td>
                                        <td class="p-4"><span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-md bg-amber-50 text-amber-800 border border-amber-200">Functional</span></td>
                                        <td class="p-4 text-textMuted">Up to 1 year</td>
                                        <td class="p-4 text-textMuted">Remembers your live chat context and preferences so customer support can assist you better.</td>
                                    </tr>
                                    <tr class="hover:bg-surfaceLight transition">
                                        <td class="p-4 font-mono text-xs text-emeraldPrimary"><code>NID</code>, <code>OTZ</code>, <code>AEC</code>, <code>SID</code>, <code>HSID</code>, <code>SSID</code></td>
                                        <td class="p-4"><span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-md bg-amber-50 text-amber-800 border border-amber-200">Functional</span></td>
                                        <td class="p-4 text-textMuted">Session – 1.5 years</td>
                                        <td class="p-4 text-textMuted">Saved by Google services to remember your user preferences, help secure your session, and prevent fraud.</td>
                                    </tr>
                                    <tr class="hover:bg-surfaceLight transition">
                                        <td class="p-4 font-mono text-xs text-emeraldPrimary"><code>_ga</code>, <code>_gid</code>, <code>_gcl_au</code></td>
                                        <td class="p-4"><span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-md bg-indigo-50 text-indigo-800 border border-indigo-200">Analytics</span></td>
                                        <td class="p-4 text-textMuted">1 – 2 years</td>
                                        <td class="p-4 text-textMuted">Helps us understand website traffic and visitor interactions so we can improve platform performance.</td>
                                    </tr>
                                    <tr class="hover:bg-surfaceLight transition">
                                        <td class="p-4 font-mono text-xs text-emeraldPrimary"><code>__gads</code>, <code>__gpi</code>, <code>SEARCH_SAMESITE</code></td>
                                        <td class="p-4"><span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-md bg-rose-50 text-rose-800 border border-rose-200">Marketing</span></td>
                                        <td class="p-4 text-textMuted">Up to 2 years</td>
                                        <td class="p-4 text-textMuted">Tracks ad performance and helps deliver customized content or relevant opportunities.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            4. Third-Party Cookies
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Certain third-party services integrated into our website may place or access cookies on your device when their specific features are loaded or utilized. These services operate under their respective privacy policies and terms.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            5. Cookie Duration
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Cookies may be classified as session cookies or persistent cookies. Session cookies are automatically deleted when you close your browser, whereas persistent cookies remain on your device for a specified timeframe or until you manually clear them.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            6. Managing Cookies
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            You have the right to manage or delete cookies via your browser settings. Most web browsers allow you to block cookies entirely, clear existing storage, or prompt you before a cookie is saved to your device.
                        </p>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            Please note that disabling essential cookies may impact certain core features of our website, including user account logins, session security, and live customer support tools.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            7. Changes to This Cookie Policy
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            We may update this Cookie Policy from time to time to reflect modifications to our website, integrated technologies, or applicable regulatory requirements. Any updates will be posted directly on this page.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <h3 class="font-display font-bold text-xl text-textMain flex items-center">
                            <span class="w-1.5 h-5 bg-emeraldPrimary rounded-full mr-3"></span>
                            8. Contact Us
                        </h3>
                        <p class="text-textMuted text-base leading-relaxed pl-4">
                            If you have any questions regarding our use of cookies or this Cookie Policy, please feel free to reach out to us through our website's contact page.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection