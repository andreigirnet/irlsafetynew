<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-surfaceLight">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signed Out | {{ config('app.name', 'Progressive Irish Safety') }}</title>
    
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

    <!-- Main Logout Container -->
    <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-cardLight border border-slate-200 rounded-3xl shadow-xl overflow-hidden p-8 sm:p-10 text-center">
            
            <div class="w-16 h-16 rounded-2xl bg-emeraldLight border border-emeraldBorder text-emeraldPrimary flex items-center justify-center text-3xl mx-auto mb-6 shadow-sm">
                <i class="fa-solid fa-shield-check"></i>
            </div>

            <h1 class="font-display text-2xl sm:text-3xl font-extrabold text-textMain tracking-tight mb-2">See You Again!</h1>
            <p class="text-textMuted text-sm sm:text-base mb-8">You have now successfully signed out of your account.</p>

            <a href="{{ route('login') }}" class="w-full bg-emeraldPrimary hover:bg-emeraldHover text-white font-semibold py-3.5 px-6 rounded-xl transition-all shadow-lg shadow-emeraldPrimary/20 inline-flex items-center justify-center gap-2">
                <i class="fa-solid fa-right-to-bracket text-xs"></i>
                <span>Log In Again</span>
            </a>

            <div class="mt-8 pt-6 border-t border-slate-100 text-sm text-textMuted">
                Need to return home? <a href="{{ url('/') }}" class="font-bold text-emeraldPrimary hover:underline ml-1">Home Page</a>
            </div>

        </div>
    </main>

    <!-- Footer Disclaimer -->
    <footer class="py-6 text-center text-xs text-textMuted bg-cardLight border-t border-slate-200">
        <p>&copy; 2026 PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED (CRO 822301). All rights reserved.</p>
    </footer>

</body>
</html>