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
                <h1 class="font-display text-4xl sm:text-5xl font-extrabold text-textMain tracking-tight">
                    Contact Us
                </h1>
            </div>

            <!-- Contact Card Container -->
            <div class="bg-cardLight border border-slate-200 rounded-2xl p-8 sm:p-12 shadow-sm space-y-8">

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

                <!-- Location & Map Section -->
                <div class="pt-6 border-t border-slate-100 space-y-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-emeraldLight text-emeraldPrimary flex items-center justify-center font-bold">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h3 class="font-display font-bold text-xl text-textMain">Our Location</h3>
                    </div>

                    <p class="text-textMuted text-sm leading-relaxed">
                        Our registered office is conveniently located in Sandyford Business Park, Dublin. While our safety courses are completed fully online for maximum flexibility, our administrative and corporate headquarters are based at the address below:
                    </p>

                    <!-- Responsive Google Maps Embed Wrapper -->
                    <div class="w-full h-80 rounded-2xl overflow-hidden border border-slate-200 shadow-sm relative bg-slate-100">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2383.917412845214!2d-6.216399!3d53.278546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670a2143026f31%3A0x446ac57b85e05417!2s51%20Bracken%20Rd%2C%20Sandyford%20Business%20Park%2C%20Dublin%2C%20D18%20CV48!5e0!3m2!1sen!2sie!4v1700000000000!5m2!1sen!2sie" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Progressive Irish Safety Office Location Map">
                        </iframe>
                    </div>

                    <!-- Direct Navigation Button -->
                    <div class="flex justify-end pt-2">
                        <a href="https://maps.google.com/?q=51+Bracken+Road+Dublin+D18+CV48" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="inline-flex items-center gap-2 bg-slate-100 hover:bg-slate-200 text-textMain text-xs font-semibold px-4 py-2.5 rounded-xl transition">
                            <i class="fa-solid fa-diamond-turn-right text-emeraldPrimary"></i>
                            <span>Get Directions on Google Maps</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection