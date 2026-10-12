
    <header class="sticky top-0 z-50 bg-cardLight/90 backdrop-blur-md border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
                <img src="{{ asset('images/logo/logolanding.webp') }}" class="h-10 w-10" alt="Ireland Safety Course Logo">

                <div>
                    <span class="font-display font-bold text-lg sm:text-xl tracking-tight text-textMain group-hover:text-emeraldPrimary transition-colors block">Ireland Safety Course</span>
                    <span class="text-xs text-textMuted block tracking-wide">PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</span>
                </div>
            </a>
            
            <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-textMuted">
                    @if(request()->is('/'))
                    <a href="#course" class="hover:text-emeraldPrimary transition-colors">Active Course</a>
                    <a href="#workflow" class="hover:text-emeraldPrimary transition-colors">Step-by-Step Process</a>
                    <a href="#faq" class="hover:text-emeraldPrimary transition-colors">FAQ</a>
                    <a href="#contact" class="hover:text-emeraldPrimary transition-colors">Support</a>
                    <a href="{{route('front.about')}}" class="hover:text-emeraldPrimary transition-colors">About us</a>
                    @endif
                    
                </nav>
            
            <div class="hidden sm:flex items-center space-x-4">
                <a href="tel:+353899735295" class="flex items-center space-x-2 text-xs text-textMuted bg-slate-100 px-3.5 py-2 rounded-lg border border-slate-200">
                    <i class="fa-solid fa-phone text-emeraldPrimary"></i>
                    <span>+353899735295</span>
                </a>
                <a href="{{ url('/register') }}" class="bg-emeraldPrimary hover:bg-emeraldHover text-white px-5 py-2.5 rounded-xl font-semibold text-sm transition-all shadow-md shadow-emeraldPrimary/20 hover:scale-105 active:scale-95 text-center">
                    Register
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex items-center sm:hidden">
                <button onclick="toggleMobileMenu()" aria-label="Toggle Mobile Menu" class="w-10 h-10 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-textMain text-lg focus:outline-none">
                    <i id="mobile-menu-icon" class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-cardLight border-b border-slate-200 px-6 py-6 space-y-4 shadow-xl">
            <nav class="flex flex-col space-y-3 font-medium text-textMain">
                <a href="#course" onclick="toggleMobileMenu()" class="py-2 border-b border-slate-100 hover:text-emeraldPrimary transition-colors flex items-center justify-between">
                    <span>Active Course</span>
                    <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
                </a>
                <a href="#workflow" onclick="toggleMobileMenu()" class="py-2 border-b border-slate-100 hover:text-emeraldPrimary transition-colors flex items-center justify-between">
                    <span>Step-by-Step Process</span>
                    <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
                </a>
                <a href="#faq" onclick="toggleMobileMenu()" class="py-2 border-b border-slate-100 hover:text-emeraldPrimary transition-colors flex items-center justify-between">
                    <span>FAQ</span>
                    <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
                </a>
                <a href="#contact" onclick="toggleMobileMenu()" class="py-2 border-b border-slate-100 hover:text-emeraldPrimary transition-colors flex items-center justify-between">
                    <span>Support</span>
                    <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
                </a>
            </nav>
            <div class="pt-2 space-y-3">
                <a href="tel:+353899735295" class="flex items-center justify-center space-x-2 text-xs text-textMain bg-slate-100 px-4 py-3 rounded-xl border border-slate-200 font-semibold">
                    <i class="fa-solid fa-phone text-emeraldPrimary"></i>
                    <span>+353899735295</span>
                </a>
                <a href="#course" onclick="toggleMobileMenu()" class="block w-full bg-emeraldPrimary hover:bg-emeraldHover text-white py-3 rounded-xl font-semibold text-sm text-center shadow-md shadow-emeraldPrimary/20">
                    Enroll Now (€30)
                </a>
            </div>
        </div>
    </header>
    <script>
        function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('mobile-menu-icon');
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-xmark');
    } else {
        menu.classList.add('hidden');
        icon.classList.remove('fa-xmark');
        icon.classList.add('fa-bars');
    }
}
    </script>