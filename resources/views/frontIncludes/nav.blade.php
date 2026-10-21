<header class="sticky top-0 z-50 bg-cardLight/90 backdrop-blur-md border-b border-slate-200 shadow-sm" x-data="{ cartOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
            <img src="{{ asset('images/logo/logolanding.webp') }}" class="h-10 w-10" alt="Progressive Irish Safety Logo">
            <div>
                <span class="font-display font-bold text-lg sm:text-xl tracking-tight text-textMain group-hover:text-emeraldPrimary transition-colors block">Progressive Irish Safety</span>
                <span class="text-xs text-textMuted block tracking-wide">PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</span>
            </div>
        </a>
        
        <!-- Desktop Navigation (Visible on all pages) -->
        <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-textMuted">
            <a href="{{ url('/#course') }}" class="hover:text-emeraldPrimary transition-colors">Active Course</a>
            <a href="{{ route('front.corporate') }}" class="hover:text-emeraldPrimary transition-colors">Team Training</a>
            <a href="{{ url('/#faq') }}" class="hover:text-emeraldPrimary transition-colors">FAQ</a>
            <a href="{{ route('front.contact') }}" class="hover:text-emeraldPrimary transition-colors">Contact</a>
            <a href="{{ route('front.about') }}" class="hover:text-emeraldPrimary transition-colors">About us</a>
        </nav>
        
        <!-- Desktop Right Actions -->
        <div class="hidden sm:flex items-center space-x-4">
            
            <!-- Desktop Cart Wrapper & Dropdown Trigger -->
            <div class="relative" @click.outside="cartOpen = false">
                <button @click="cartOpen = !cartOpen" class="relative p-3 text-textMuted hover:text-emeraldPrimary transition-colors focus:outline-none flex items-center justify-center">
                    <div class="relative w-8 h-8 sm:w-6 sm:h-6 flex items-center justify-center">
                        <img src="{{ asset('images/icons/cartSingle.png') }}" class="w-full h-full object-contain" alt="Cart">
                        
                        <!-- Scaled Badge Counter -->
                        <div class="absolute -top-2 -right-2 z-10" x-cloak>
                            <template x-if="$store.cart.cartTotalQty() > 0">
                                <span class="bg-emeraldPrimary text-white text-xs font-bold w-5 h-5 flex items-center justify-center rounded-full shadow-md animate__animated animate__bounceIn"
                                      x-text="$store.cart.cartTotalQty()">
                                </span>
                            </template>
                        </div>
                    </div>
                </button>
            </div>
            <!-- Phone -->
            <a href="tel:{{ config('global.phone') }}" class="flex items-center space-x-2 text-xs text-textMuted bg-slate-100 px-3.5 py-2 rounded-lg border border-slate-200">
                <i class="fa-solid fa-phone text-emeraldPrimary"></i>
                <span>{{ config('global.phone') }}</span>
            </a>

            <!-- Register -->
            <a href="{{ url('/register') }}" class="bg-emeraldPrimary hover:bg-emeraldHover text-white px-5 py-2.5 rounded-xl font-semibold text-sm transition-all shadow-md shadow-emeraldPrimary/20 hover:scale-105 active:scale-95 text-center">
                Register
            </a>
        </div>

        <!-- Mobile Right Action Area -->
        <div class="flex items-center space-x-3 sm:hidden">
            
            <div class="relative" @click.outside="cartOpen = false">
                <button @click="cartOpen = !cartOpen" class="relative p-2 text-textMuted hover:text-emeraldPrimary transition-colors focus:outline-none flex items-center justify-center">
                    <div class="relative w-10 h-10 sm:w-6 sm:h-6 flex items-center justify-center">
                        <img src="{{ asset('images/icons/cartSingle.png') }}" class="w-full h-full object-contain" alt="Cart">
                        
                        <div class="absolute -top-1 -right-1 sm:-top-1.5 sm:-right-1.5 z-10" x-cloak>
                            <template x-if="$store.cart.cartTotalQty() > 0">
                                <span class="bg-emeraldPrimary text-white text-xs font-bold w-5 h-5 flex items-center justify-center rounded-full shadow-md animate__animated animate__bounceIn"
                                      x-text="$store.cart.cartTotalQty()">
                                </span>
                            </template>
                        </div>
                    </div>
                </button>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button onclick="toggleMobileMenu()" aria-label="Toggle Mobile Menu" class="w-10 h-10 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-textMain text-lg focus:outline-none">
                <i id="mobile-menu-icon" class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- SHARED CART POPOVER DROPDOWN (Controlled by header's cartOpen state) -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div x-show="cartOpen" x-cloak @click.outside="cartOpen = false"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95 translate-y-1"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-95 translate-y-1"
             class="absolute right-4 sm:right-16 top-0 w-[calc(100vw-2rem)] sm:w-96 bg-white rounded-2xl shadow-2xl border border-slate-200 p-4 z-50 text-left">
            
            <!-- Popover Header -->
            <div class="flex justify-between items-center pb-3 border-b border-slate-100 mb-3">
                <h3 class="font-display font-bold text-sm text-textMain">Cart Summary</h3>
                <button @click="cartOpen = false" class="text-slate-400 hover:text-slate-600 text-sm font-bold">&times;</button>
            </div>

            <!-- Popover Body (Items List) -->
            <div class="max-h-64 overflow-y-auto space-y-2.5 pr-1">
                <template x-if="$store.cart.items.length === 0">
                    <p class="text-slate-400 text-xs text-center py-6">Your cart is empty.</p>
                </template>

                <template x-for="item in $store.cart.items" :key="item.id">
                    <div class="flex items-center justify-between bg-slate-50 p-2.5 rounded-xl border border-slate-100 gap-2">
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-xs text-textMain truncate" x-text="item.name"></h4>
                            <p class="text-[11px] text-emeraldPrimary font-bold">€<span x-text="item.price"></span></p>
                        </div>
                        
                        <!-- Quantity Controls -->
                        <div class="flex items-center space-x-1.5 bg-white border border-slate-200 rounded-lg px-1 py-0.5">
                            <button @click="$store.cart.updateQty(item.id, Math.max(1, item.quantity - 1))" 
                                    class="w-5 h-5 flex items-center justify-center text-slate-600 hover:bg-slate-100 rounded text-xs">-</button>
                            <span class="text-xs font-bold w-4 text-center" x-text="item.quantity"></span>
                            <button @click="$store.cart.updateQty(item.id, item.quantity + 1)" 
                                    class="w-5 h-5 flex items-center justify-center text-slate-600 hover:bg-slate-100 rounded text-xs">+</button>
                        </div>

                        <!-- Remove -->
                        <button @click="$store.cart.removeItem(item.id)" class="text-slate-300 hover:text-red-500 text-xs p-1 transition-colors">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </template>
            </div>

            <!-- Popover Footer -->
            <template x-if="$store.cart.items.length > 0">
                <div class="pt-3 mt-3 border-t border-slate-100 space-y-2">
                    <div class="flex justify-between text-xs text-slate-600">
                        <span>Subtotal:</span>
                        <span class="font-semibold text-textMain">€<span x-text="$store.cart.cartSubTotal().toFixed(2)"></span></span>
                    </div>
                    <div class="flex justify-between text-sm font-bold text-textMain">
                        <span>Total:</span>
                        <span class="text-emeraldPrimary">€<span x-text="$store.cart.cartTotal(10)"></span></span>
                    </div>

                    <a href="{{ url('/cart') }}" @click="cartOpen = false" class="block w-full text-center bg-emeraldPrimary hover:bg-emeraldHover text-white py-2.5 rounded-xl font-semibold text-xs transition shadow-sm">
                        View Full Cart & Checkout
                    </a>
                </div>
            </template>
        </div>
    </div>

    <!-- Mobile Drawer Navigation Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-cardLight border-b border-slate-200 px-6 py-6 space-y-4 shadow-xl">
        <nav class="flex flex-col space-y-3 font-medium text-textMain">
            <a href="{{ url('/#course') }}" onclick="toggleMobileMenu()" class="py-2 border-b border-slate-100 hover:text-emeraldPrimary transition-colors flex items-center justify-between">
                <span>Active Course</span>
                <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
            </a>
            <a href="{{ url('/#workflow') }}" onclick="toggleMobileMenu()" class="py-2 border-b border-slate-100 hover:text-emeraldPrimary transition-colors flex items-center justify-between">
                <span>Step-by-Step Process</span>
                <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
            </a>
            <a href="{{ url('/#faq') }}" onclick="toggleMobileMenu()" class="py-2 border-b border-slate-100 hover:text-emeraldPrimary transition-colors flex items-center justify-between">
                <span>FAQ</span>
                <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
            </a>
            <a href="{{ route('front.contact') }}" onclick="toggleMobileMenu()" class="py-2 border-b border-slate-100 hover:text-emeraldPrimary transition-colors flex items-center justify-between">
                <span>Contact</span>
                <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
            </a>
            <a href="{{ route('front.about') }}" onclick="toggleMobileMenu()" class="py-2 border-b border-slate-100 hover:text-emeraldPrimary transition-colors flex items-center justify-between">
                <span>About us</span>
                <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
            </a>
        </nav>
        <div class="pt-2 space-y-3">
            <a href="tel:{{ config('global.phone') }}" class="flex items-center justify-center space-x-2 text-xs text-textMain bg-slate-100 px-4 py-3 rounded-xl border border-slate-200 font-semibold">
                <i class="fa-solid fa-phone text-emeraldPrimary"></i>
                <span>{{ config('global.phone') }}</span>
            </a>
            <a href="{{ url('/register') }}" onclick="toggleMobileMenu()" class="block w-full bg-emeraldPrimary hover:bg-emeraldHover text-white py-3 rounded-xl font-semibold text-sm text-center shadow-md shadow-emeraldPrimary/20">
                Register Now (€30)
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