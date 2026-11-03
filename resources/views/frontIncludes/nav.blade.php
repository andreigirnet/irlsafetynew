<header class="sticky top-0 z-50 bg-cardLight/95 backdrop-blur-md border-b border-slate-200 shadow-sm" x-data="{ cartOpen: false }">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 h-16 sm:h-20 flex items-center justify-between relative">
        
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center space-x-2 group min-w-0">
            <img src="{{ asset('images/logo/logolanding.webp') }}" class="h-8 w-8 sm:h-10 sm:w-10 flex-shrink-0" alt="Progressive Irish Safety Logo">
            <div class="min-w-0">
                <span class="font-display font-bold text-sm sm:text-xl tracking-tight text-textMain group-hover:text-emeraldPrimary transition-colors truncate block">Progressive Irish Safety</span>
            </div>
        </a>
        
        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-textMuted">
            <a href="{{ url('/#course') }}" class="hover:text-emeraldPrimary transition-colors">Course</a>
            <a href="{{ route('front.corporate') }}" class="hover:text-emeraldPrimary transition-colors">Team Training</a>
            <a href="{{ url('/#faq') }}" class="hover:text-emeraldPrimary transition-colors">FAQ</a>
            <a href="{{ route('front.contact') }}" class="hover:text-emeraldPrimary transition-colors">Contact</a>
            <a href="{{ route('front.about') }}" class="hover:text-emeraldPrimary transition-colors">About us</a>
        </nav>
        
        <!-- Desktop Right Actions -->
        <div class="hidden sm:flex items-center space-x-3">
            
            <!-- Desktop Cart Wrapper & Trigger -->
            <div class="relative" @click.outside="cartOpen = false">
                <button @click="cartOpen = !cartOpen" class="relative p-2.5 text-textMuted hover:text-emeraldPrimary transition-colors focus:outline-none flex items-center justify-center cursor-pointer">
                    <div class="relative w-6 h-6 flex items-center justify-center">
                        <img src="{{ asset('images/icons/cartSingle.png') }}" class="w-full h-full object-contain" alt="Cart">
                        
                        <div class="absolute -top-2 -right-2 z-10" x-cloak>
                            <template x-if="$store.cart.cartTotalQty() > 0">
                                <span class="bg-emeraldPrimary text-white text-xs font-bold w-5 h-5 flex items-center justify-center rounded-full shadow-md"
                                    x-text="$store.cart.cartTotalQty()">
                                </span>
                            </template>
                        </div>
                    </div>
                </button>
            </div>

            <a href="{{ url('/login') }}" class="bg-white hover:bg-emerald-50 text-emeraldPrimary border border-emeraldPrimary px-4 py-2 rounded-xl font-semibold text-sm transition-all shadow-sm">
                Login
            </a>

            <a href="/register" 
            class="bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-600 hover:to-orange-700 text-white px-4 py-2 rounded-xl font-semibold text-sm transition-all shadow-md shadow-orange-500/20 flex items-center gap-1.5 cursor-pointer">
                <span>Register</span>
            </a>
        </div>

        <!-- Mobile Right Action Area -->
        <div class="flex items-center space-x-1.5 sm:hidden">
            <!-- Mobile Cart Button -->
            <button @click="cartOpen = !cartOpen" class="relative p-2 bg-slate-100 rounded-lg text-textMain hover:text-emeraldPrimary transition-colors focus:outline-none flex items-center justify-center cursor-pointer">
                <div class="relative w-5 h-5 flex items-center justify-center">
                    <img src="{{ asset('images/icons/cartSingle.png') }}" class="w-full h-full object-contain" alt="Cart">
                    
                    <div class="absolute -top-1 -right-1 z-10" x-cloak>
                        <template x-if="$store.cart.cartTotalQty() > 0">
                            <span class="bg-emeraldPrimary text-white text-[9px] font-bold w-3.5 h-3.5 flex items-center justify-center rounded-full shadow-md"
                                x-text="$store.cart.cartTotalQty()">
                            </span>
                        </template>
                    </div>
                </div>
            </button>

           <a href="/register" 
            @click.prevent="$store.cart.addItem({ id: 1, name: 'Manual Handling Training', price: 27, quantity: 1 }); cartOpen = true; window.location.href='/register';" 
            class="bg-gradient-to-r from-amber-500 to-orange-600 text-white px-2.5 py-1.5 rounded-lg font-bold text-xs shadow-sm flex items-center gap-1 cursor-pointer no-underline">
                <span>Register</span>
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button onclick="toggleMobileMenu()" aria-label="Toggle Mobile Menu" class="w-9 h-9 rounded-lg bg-slate-100 border border-slate-200 flex items-center justify-center text-textMain text-base focus:outline-none cursor-pointer">
                <i id="mobile-menu-icon" class="fa-solid fa-bars"></i>
            </button>
        </div>

        <!-- 🛒 SINGLE UNIFIED CART DROPDOWN PANEL -->
        <div x-show="cartOpen" x-cloak @click.outside="cartOpen = false"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95 translate-y-1"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-95 translate-y-1"
             class="absolute right-4 top-16 w-[calc(100vw-2rem)] sm:w-96 bg-white rounded-2xl shadow-2xl border border-slate-200 p-4 z-50 text-left">
            
            <div class="flex justify-between items-center pb-3 border-b border-slate-100 mb-3">
                <h3 class="font-display font-bold text-sm text-textMain">Cart Summary</h3>
                <button @click="cartOpen = false" class="text-slate-400 hover:text-slate-600 text-sm font-bold cursor-pointer">&times;</button>
            </div>

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
                        
                        <div class="flex items-center space-x-1.5 bg-white border border-slate-200 rounded-lg px-1 py-0.5">
                            <button @click="$store.cart.updateQty(item.id, Math.max(1, item.quantity - 1))" 
                                    class="w-5 h-5 flex items-center justify-center text-slate-600 hover:bg-slate-100 rounded text-xs cursor-pointer">-</button>
                            <span class="text-xs font-bold w-4 text-center" x-text="item.quantity"></span>
                            <button @click="$store.cart.updateQty(item.id, item.quantity + 1)" 
                                    class="w-5 h-5 flex items-center justify-center text-slate-600 hover:bg-slate-100 rounded text-xs cursor-pointer">+</button>
                        </div>

                        <button @click="$store.cart.removeItem(item.id)" class="text-slate-300 hover:text-red-500 text-xs p-1 transition-colors cursor-pointer">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </template>
            </div>

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

                    <a href="{{ url('/checkout') }}" @click="cartOpen = false" class="block w-full text-center bg-emeraldPrimary hover:bg-emeraldHover text-white py-2.5 rounded-xl font-semibold text-xs transition shadow-sm">
                        Proceed to Checkout
                    </a>
                </div>
            </template>
        </div>

    </div>

    <!-- ⚡ BLACK FRIDAY SUBNAV BANNER -->
    <div class="bg-gradient-to-r from-emeraldDark via-[#064e3b] to-emeraldDark text-white px-3 py-2 sm:py-2.5 border-t border-emerald-900/50 shadow-inner" 
         x-data="blackFridayCountdown('2026-11-30T23:59:59')">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-2 text-xs sm:text-sm">
            
            <div class="flex items-center gap-1.5 sm:gap-2 font-medium truncate">
                <span class="bg-gradient-to-r from-amber-500 to-orange-600 text-white font-extrabold uppercase px-1.5 py-0.5 rounded text-[9px] sm:text-xs tracking-wider shadow shrink-0 animate-pulse">
                    Black Friday
                </span>

                <span class="truncate flex items-center gap-1.5">
                    <span class="line-through text-red-400 font-bold text-base sm:text-lg">€45</span> 
                    <strong class="text-orange-400 font-black text-xl sm:text-2xl drop-shadow">€27</strong>
                </span>
                <span class="hidden lg:inline-block text-xs text-slate-300 font-normal border-l border-emerald-700/60 pl-2.5 ml-1">
                    The sale is available only this November
                </span>
            </div>

            <div class="flex items-center gap-2 shrink-0">
                <!-- Desktop Full Timer -->
                <div class="hidden sm:flex items-center gap-1 bg-black/30 px-2.5 py-1 rounded-md border border-white/10 text-xs font-mono">
                    <span class="text-orange-400 font-bold" x-text="days">00</span>d :
                    <span class="text-orange-400 font-bold" x-text="hours">00</span>h :
                    <span class="text-orange-400 font-bold" x-text="minutes">00</span>m :
                    <span class="text-orange-400 font-bold" x-text="seconds">00</span>s
                </div>

                <!-- Mobile Days Only Timer -->
                <div class="flex sm:hidden items-center gap-1 bg-black/30 px-2 py-1 rounded-md border border-white/10 text-[11px] font-mono">
                    <span class="text-orange-400 font-bold" x-text="days + 'd left'">00d left</span>
                </div>
                
                <a href="/register" 
                class="bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-600 text-white font-bold px-2.5 sm:px-4 py-1.5 rounded-lg text-xs shadow transition-all active:scale-95 inline-flex items-center gap-1 cursor-pointer">
                    <span>Start Now</span>
                    <i class="fa-solid fa-arrow-right text-[9px]"></i>
                </a>
            </div>

        </div>
    </div>

    <!-- Mobile Drawer Navigation Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-cardLight border-b border-slate-200 px-5 py-5 space-y-3 shadow-xl">
        <nav class="flex flex-col space-y-1.5 font-medium text-textMain text-sm">
            <a href="{{ url('/#course') }}" onclick="toggleMobileMenu()" class="py-2.5 border-b border-slate-100 hover:text-emeraldPrimary flex items-center justify-between">
                <span>Course Overview</span>
                <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
            </a>
            <a href="{{ route('front.corporate') }}" onclick="toggleMobileMenu()" class="py-2.5 border-b border-slate-100 hover:text-emeraldPrimary flex items-center justify-between">
                <span>Team Training</span>
                <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
            </a>
            <a href="{{ url('/#faq') }}" onclick="toggleMobileMenu()" class="py-2.5 border-b border-slate-100 hover:text-emeraldPrimary flex items-center justify-between">
                <span>FAQ</span>
                <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
            </a>
            <a href="{{ route('front.contact') }}" onclick="toggleMobileMenu()" class="py-2.5 border-b border-slate-100 hover:text-emeraldPrimary flex items-center justify-between">
                <span>Contact Us</span>
                <i class="fa-solid fa-chevron-right text-xs text-textMuted"></i>
            </a>
        </nav>
        <div class="pt-2 space-y-2">
            <a href="{{ url('/login') }}" onclick="toggleMobileMenu()" class="block w-full bg-slate-100 text-textMain py-2.5 rounded-xl font-semibold text-xs text-center">
                Login
            </a>
            <a href="{{ url('/register') }}" onclick="toggleMobileMenu()" class="block w-full bg-emeraldPrimary text-white py-2.5 rounded-xl font-semibold text-xs text-center shadow-md">
                Register Account
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

    document.addEventListener('alpine:init', () => {
        Alpine.data('blackFridayCountdown', (expiryDate) => ({
            days: '00',
            hours: '00',
            minutes: '00',
            seconds: '00',
            init() {
                const targetTime = new Date(expiryDate).getTime();
                
                setInterval(() => {
                    const now = new Date().getTime();
                    const diff = targetTime - now;

                    if (diff <= 0) {
                        this.days = '00';
                        this.hours = '00';
                        this.minutes = '00';
                        this.seconds = '00';
                        return;
                    }

                    const d = Math.floor(diff / (1000 * 60 * 60 * 24));
                    const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                    const s = Math.floor((diff % (1000 * 60)) / 1000);

                    this.days = String(d).padStart(2, '0');
                    this.hours = String(h).padStart(2, '0');
                    this.minutes = String(m).padStart(2, '0');
                    this.seconds = String(s).padStart(2, '0');
                }, 1000);
            }
        }));
    });
</script>