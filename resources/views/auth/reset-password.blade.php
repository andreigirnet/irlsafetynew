@php
    $token = request('token');
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-surfaceLight">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create a New Password | {{ config('app.name', 'Progressive Irish Safety') }}</title>
    
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

    <!-- Top Corporate Transparency Notice -->
    <header class="bg-emeraldDark text-emerald-100 text-xs py-2 px-4 text-center font-medium border-b border-emerald-950">
        <span>Operated by PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED (CRO 822301)</span> &bull; <span>51 Bracken Road, Dublin, Ireland</span>
    </header>

    <!-- Main Reset Container -->
    <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl w-full bg-cardLight border border-slate-200 rounded-3xl shadow-xl overflow-hidden grid grid-cols-1 lg:grid-cols-12">
            
            <!-- Left Info Panel (Visual & Trust Building) -->
            <div class="lg:col-span-5 bg-gradient-to-br from-emeraldDark to-emerald-900 text-white p-8 sm:p-12 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#10B981_1px,transparent_1px)] [background-size:16px_16px]"></div>
                
                <div class="relative z-10 space-y-6">
                    <a href="{{ url('/') }}" class="inline-flex items-center space-x-3 group">
                        <div class="w-10 h-10 rounded-xl bg-sageAccent flex items-center justify-center text-emeraldDark font-bold text-xl shadow-md">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <span class="font-display font-bold text-xl tracking-tight text-white">Progressive Irish Safety</span>
                    </a>
                    
                    <div class="space-y-3 pt-6">
                        <span class="bg-emerald-800/80 text-emerald-300 border border-emerald-700 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider inline-block">Security Update</span>
                        <h2 class="font-display text-3xl font-extrabold tracking-tight">Set New Password</h2>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Please choose a secure new password to protect your student dashboard and training records.
                        </p>
                    </div>
                </div>

                <div class="relative z-10 pt-10 border-t border-emerald-800/60 mt-8 text-xs text-slate-300 space-y-2">
                    <p class="font-semibold text-white">Security Recommendation:</p>
                    <p>Use a unique combination of letters, numbers, and symbols for maximum protection.</p>
                </div>
            </div>

            <!-- Right Reset Form Panel -->
            <div class="lg:col-span-7 p-8 sm:p-12 bg-cardLight flex flex-col justify-center">
                
                <div class="mb-8">
                    <h1 class="font-display text-2xl sm:text-3xl font-extrabold text-textMain tracking-tight">Create a New Password</h1>
                    <p class="text-textMuted text-sm mt-1">Enter your new credentials below.</p>
                </div>

                <!-- Session Success Alert -->
                @if (session('success'))
                    <div class="bg-emeraldLight text-emeraldPrimary border border-emeraldBorder p-4 rounded-xl mb-6 text-sm font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                <!-- Validation Errors Alert -->
                @if ($errors->any())
                    <div class="bg-rose-50 text-rose-800 border border-rose-200 p-4 rounded-xl mb-6 text-sm">
                        <div class="font-bold mb-1 flex items-center gap-2">
                            <i class="fa-solid fa-triangle-exclamation"></i> Please fix the following errors:
                        </div>
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Reset Password Form -->
                <form action="{{ route('password.update') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div>
                        <label for="emailaddress" class="block text-xs font-bold uppercase tracking-wider text-textMuted mb-2">Email Address</label>
                        <input type="email" name="email" id="emailaddress" class="w-full bg-surfaceLight border border-slate-200 rounded-xl px-4 py-3.5 text-textMain text-sm focus:outline-none focus:border-emeraldPrimary transition" value="{{ old('email') }}" placeholder="name@example.com" required>
                    </div>

                    <div>
                        <label for="password" class="block text-xs font-bold uppercase tracking-wider text-textMuted mb-2">New Password</label>
                        <input type="password" name="password" id="password" class="w-full bg-surfaceLight border border-slate-200 rounded-xl px-4 py-3.5 text-textMain text-sm focus:outline-none focus:border-emeraldPrimary transition" placeholder="Enter new password" required autocomplete="new-password">
                    </div>

                    <div>
                        <label for="password-confirm" class="block text-xs font-bold uppercase tracking-wider text-textMuted mb-2">Confirm New Password</label>
                        <input type="password" name="password_confirmation" id="password-confirm" class="w-full bg-surfaceLight border border-slate-200 rounded-xl px-4 py-3.5 text-textMain text-sm focus:outline-none focus:border-emeraldPrimary transition" placeholder="Confirm new password" required autocomplete="new-password">
                    </div>

                    <button type="submit" class="w-full bg-emeraldPrimary hover:bg-emeraldHover text-white font-semibold py-3.5 rounded-xl transition-all shadow-lg shadow-emeraldPrimary/20 mt-4 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-rotate-right text-xs"></i>
                        <span>Reset Password</span>
                    </button>
                </form>

                <!-- Back to Login Footer Redirect -->
                <div class="mt-8 pt-6 border-t border-slate-100 text-center text-sm text-textMuted">
                    Remembered your password? <a href="{{ route('login') }}" class="font-bold text-emeraldPrimary hover:underline ml-1">Log In</a>
                </div>

            </div>

        </div>
    </main>

    <!-- Footer Disclaimer -->
    <footer class="py-6 text-center text-xs text-textMuted bg-cardLight border-t border-slate-200">
        <p>&copy; 2026 PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED (CRO 822301). All rights reserved.</p>
    </footer>


</body>
</html>