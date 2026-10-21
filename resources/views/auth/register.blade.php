<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-surfaceLight">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, follow">
    <title>Create your account | {{ config('app.name', 'Progressive Irish Safety') }}</title>

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        emeraldPrimary: '#065F46',
                        emeraldHover: '#047857',
                        emeraldLight: '#ECFDF5',
                        emeraldBorder: '#A7F3D0',
                        emeraldDark: '#022C22',
                        sageAccent: '#10B981',
                        surfaceLight: '#F8FAFC',
                        cardLight: '#FFFFFF',
                        textMain: '#1E293B',
                        textMuted: '#64748B'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>

    {{-- Alpine.js Core CDN --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Google Fonts & Icons --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="h-full font-sans antialiased text-textMain bg-surfaceLight flex flex-col justify-between selection:bg-emeraldPrimary selection:text-white">

    <!-- Company details bar -->
    <header class="bg-emeraldDark text-emerald-100 text-xs py-2 px-4 text-center font-medium border-b border-emerald-950">
        <span>Operated by PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED (CRO 822301)</span> &bull; <span>51 Bracken Road, Dublin, Ireland</span>
    </header>

    <!-- Main Registration Container -->
    <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl w-full bg-cardLight border border-slate-200 rounded-3xl shadow-xl overflow-hidden grid grid-cols-1 lg:grid-cols-12">

            <!-- Left info panel -->
            <div class="lg:col-span-5 bg-gradient-to-br from-emeraldDark to-emerald-900 text-white p-8 sm:p-12 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#10B981_1px,transparent_1px)] [background-size:16px_16px]"></div>

                <div class="relative z-10 space-y-6">
                    <a href="{{ url('/') }}" class="inline-flex items-center space-x-3 group">
                        <div class="w-10 h-10 rounded-xl bg-sageAccent flex items-center justify-center text-emeraldDark font-bold text-xl shadow-md">
                            <img src="{{ asset('images/logo/logolanding.webp') }}" class="rounded-xl" alt="Progressive Irish Safety Logo">
                        </div>
                        <span class="font-display font-bold text-xl tracking-tight text-white">Progressive Irish Safety</span>
                    </a>

                    <div class="space-y-3 pt-6">
                        <span class="bg-emerald-800/80 text-emerald-200 border border-emerald-700 text-xs font-semibold px-3 py-1 rounded-full inline-block">Learning portal</span>
                        <h2 class="font-display text-3xl font-extrabold tracking-tight">Create your account</h2>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Register to open your dashboard. From there you can complete the online theory slides, take the theory test, and send your practical video on WhatsApp for instructor review.
                        </p>
                    </div>
                </div>

                <div class="relative z-10 pt-10 border-t border-emerald-800/60 mt-8 text-xs text-slate-300 space-y-2">
                    <p class="font-semibold text-white">How certification works</p>
                    <p>A certificate of completion is issued after you pass the online theory test and an instructor approves your practical video.</p>
                </div>
            </div>

            <!-- Right registration form panel -->
            <div class="lg:col-span-7 p-8 sm:p-12 bg-cardLight flex flex-col justify-center">

                <div class="mb-6">
                    <h1 class="font-display text-2xl sm:text-3xl font-extrabold text-textMain tracking-tight">Create an account</h1>
                    <p class="text-textMuted text-sm mt-1">Creating an account does not cost anything. The course costs €30, which you pay after you register.</p>
                </div>

                <!-- Session success alert -->
                @if (session('success'))
                    <div class="bg-emeraldLight text-emeraldPrimary border border-emeraldBorder p-4 rounded-xl mb-6 text-sm font-semibold flex items-center gap-2" role="status">
                        <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                <!-- Validation errors alert -->
                @if ($errors->any())
                    <div class="bg-rose-50 text-rose-800 border border-rose-200 p-4 rounded-xl mb-6 text-sm" role="alert">
                        <div class="font-bold mb-1 flex items-center gap-2">
                            <i class="fa-solid fa-triangle-exclamation" aria-hidden="true"></i> Please fix the following:
                        </div>
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Registration form with Conditional Inline Cart Summary Box -->
                <form method="POST" action="{{ route('register') }}" class="space-y-4" x-data>
                    @csrf

                    <!-- Embedded Cart Summary Inside Form (Shows ONLY when items exist) -->
                    <template x-if="$store.cart.items.length > 0">
                        <div class="bg-surfaceLight border border-slate-200 rounded-2xl p-4 mb-6" x-cloak>
                            <div class="flex justify-between items-center pb-3 border-b border-slate-200 mb-3">
                                <h3 class="font-display font-bold text-sm text-textMain flex items-center gap-2">
                                    🛒 Cart Summary
                                </h3>
                                <span class="text-xs text-textMuted font-medium" x-text="$store.cart.cartTotalQty() + ' item(s)'"></span>
                            </div>

                            <!-- Cart Items List -->
                            <div class="space-y-2.5 max-h-48 overflow-y-auto pr-1">
                                <template x-for="item in $store.cart.items" :key="item.id">
                                    <div class="flex items-center justify-between bg-white p-3 rounded-xl border border-slate-200 gap-3">
                                        <div class="flex-1 min-w-0">
                                            <h4 class="font-semibold text-xs text-textMain truncate" x-text="item.name"></h4>
                                            <p class="text-xs text-emeraldPrimary font-bold mt-0.5">€<span x-text="item.price"></span></p>
                                        </div>
                                        
                                        <!-- Quantity Controls -->
                                        <div class="flex items-center space-x-1.5 bg-slate-50 border border-slate-200 rounded-lg px-1.5 py-1">
                                            <button type="button" @click="$store.cart.updateQty(item.id, Math.max(1, item.quantity - 1))" 
                                                    class="w-5 h-5 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded text-xs">-</button>
                                            <span class="text-xs font-bold w-4 text-center" x-text="item.quantity"></span>
                                            <button type="button" @click="$store.cart.updateQty(item.id, item.quantity + 1)" 
                                                    class="w-5 h-5 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded text-xs">+</button>
                                        </div>

                                        <!-- Remove Item -->
                                        <button type="button" @click="$store.cart.removeItem(item.id)" class="text-slate-300 hover:text-red-500 text-xs p-1 transition-colors">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </div>
                                </template>
                            </div>

                            <!-- Subtotal & Total Footer -->
                            <div class="pt-3 mt-3 border-t border-slate-200 space-y-1.5">
                                <div class="flex justify-between text-xs text-textMuted">
                                    <span>Subtotal:</span>
                                    <span class="font-medium text-textMain">€<span x-text="$store.cart.cartSubTotal().toFixed(2)"></span></span>
                                </div>
                                <div class="flex justify-between text-sm font-bold text-textMain pt-1 border-t border-slate-100">
                                    <span>Total:</span>
                                    <span class="text-emeraldPrimary text-base">€<span x-text="$store.cart.cartTotal(10)"></span></span>
                                </div>
                            </div>
                        </div>
                    </template>

                    <div>
                        <label for="fullname" class="block text-sm font-semibold text-textMain mb-2">Full name</label>
                        <input type="text" name="name" id="fullname" autocomplete="name" class="w-full bg-surfaceLight border border-slate-200 rounded-xl px-4 py-3 text-textMain text-sm focus:outline-none focus:border-emeraldPrimary transition" value="{{ old('name') }}" placeholder="John Doe" required>
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-semibold text-textMain mb-2">Phone number</label>
                        <input type="tel" name="phone" id="phone" autocomplete="tel" class="w-full bg-surfaceLight border border-slate-200 rounded-xl px-4 py-3 text-textMain text-sm focus:outline-none focus:border-emeraldPrimary transition" value="{{ old('phone') }}" placeholder="+353 89 000 0000" required>
                        <p class="text-xs text-textMuted mt-1.5">We use your phone number to contact you about your practical video review.</p>
                    </div>

                    <div>
                        <label for="emailaddress" class="block text-sm font-semibold text-textMain mb-2">Email address</label>
                        <input type="email" name="email" id="emailaddress" autocomplete="email" class="w-full bg-surfaceLight border border-slate-200 rounded-xl px-4 py-3 text-textMain text-sm focus:outline-none focus:border-emeraldPrimary transition" value="{{ old('email') }}" placeholder="john@example.com" required>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-semibold text-textMain mb-2">Password</label>
                        <input type="password" name="password" id="password" autocomplete="new-password" class="w-full bg-surfaceLight border border-slate-200 rounded-xl px-4 py-3 text-textMain text-sm focus:outline-none focus:border-emeraldPrimary transition" placeholder="Create a password" required>
                    </div>

                    <div>
                        <label for="password-confirm" class="block text-sm font-semibold text-textMain mb-2">Confirm password</label>
                        <input type="password" name="password_confirmation" id="password-confirm" autocomplete="new-password" class="w-full bg-surfaceLight border border-slate-200 rounded-xl px-4 py-3 text-textMain text-sm focus:outline-none focus:border-emeraldPrimary transition" placeholder="Confirm your password" required>
                    </div>

                    <div class="pt-2 text-xs text-textMuted">
                        By registering, you acknowledge our <a href="{{ route('front.privacy') }}" class="text-emeraldPrimary font-semibold hover:underline">Privacy Policy</a> and <a href="{{ route('terms') }}" class="text-emeraldPrimary font-semibold hover:underline">Terms &amp; Conditions</a>.
                    </div>

                    <button type="submit" class="w-full bg-emeraldPrimary hover:bg-emeraldHover text-white font-semibold py-3.5 rounded-xl transition-all shadow-lg shadow-emeraldPrimary/20 mt-4 cursor-pointer">
                        Create account
                    </button>
                </form>

                <!-- Login redirect -->
                <div class="mt-8 pt-6 border-t border-slate-100 text-center text-sm text-textMuted">
                    Already have an account? <a href="{{ route('login') }}" class="font-bold text-emeraldPrimary hover:underline ml-1">Log in</a>
                </div>

                <!-- Support -->
                <div class="mt-4 text-center text-xs text-textMuted">
                    Need help? Message us on
                    <a href="https://wa.me/353899735295" target="_blank" rel="noopener noreferrer" class="text-emeraldPrimary font-semibold hover:underline">WhatsApp</a>
                </div>

            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="py-6 text-center text-xs text-textMuted bg-cardLight border-t border-slate-200">
        <p class="mb-2">&copy; {{ date('Y') }} PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED (CRO 822301). All rights reserved.</p>
        <p>
            <a href="{{ route('front.privacy') }}" class="hover:underline">Privacy Policy</a>
            <span class="mx-2">&bull;</span>
            <a href="{{ route('terms') }}" class="hover:underline">Terms &amp; Conditions</a>
        </p>
    </footer>

    {{-- Alpine Store Script to maintain cart state across pages --}}
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('cart', {
                items: JSON.parse(localStorage.getItem('cart') || '[]'),

                save() {
                    localStorage.setItem('cart', JSON.stringify(this.items))
                },

                addItem(product) {
                    let existing = this.items.find(i => i.id === product.id)
                    if(existing){
                        existing.quantity += product.quantity
                    } else {
                        this.items.push(product)
                    }
                    this.save()
                },

                removeItem(id){
                    this.items = this.items.filter(i => i.id !== id)
                    this.save()
                },

                updateQty(id, qty){
                    let item = this.items.find(i => i.id === id)
                    if(item){
                        item.quantity = Number(qty)
                        this.save()
                    }
                },

                cartSubTotal(){
                    return this.items.reduce((sum,i)=>sum + i.price * i.quantity, 0)
                },

                cartTotalQty(){
                    return this.items.reduce((sum,i)=>sum + i.quantity, 0)
                },

                cartTotal(discount=0){
                    let total = this.cartSubTotal()
                    if(this.cartTotalQty() > 9) total = total * (1 - discount / 100)
                    return total.toFixed(2)
                }
            })
        })
    </script>
</body>
</html>