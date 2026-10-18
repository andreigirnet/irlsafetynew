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

    {{-- Google Fonts & Icons --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                            <img src="{{ asset('images/logo/logolanding.webp') }}" class="rounded-xl"  alt="Progressive Irish Safety Logo">
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

                <div class="mb-8">
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


            

                <!-- Registration form -->
                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

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

                    <button type="submit" class="w-full bg-emeraldPrimary hover:bg-emeraldHover text-white font-semibold py-3.5 rounded-xl transition-all shadow-lg shadow-emeraldPrimary/20 mt-4">
                        Create account
                    </button>
                </form>

                <!-- Login redirect -->
                <div class="mt-8 pt-6 border-t border-slate-100 text-center text-sm text-textMuted">
                    Already have an account? <a href="{{ route('login') }}" class="font-bold text-emeraldPrimary hover:underline ml-1">Log in</a>
                </div>

                <!-- Support: chat only loads when the visitor asks for it -->
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

</body>
</html>