<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- Title (Factually precise, no unverified claims) --}}
    <title>Online Workplace Safety Training Ireland | {{ config('app.name') }}</title>
    
    {{-- Meta description (Strictly factual, mentioning exact operating entity, price, and review process) --}}
    <meta name="description" content="Online workplace safety training operated by PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED (CRO 822301). €30 Manual Handling courses with online theory and instructor practical video review.">
    <meta name="keywords" content="Manual Handling Training Ireland, Online Safety Courses Ireland, Workplace Safety Training">
    
    {{-- Open Graph / Canonical --}}
    <link rel="canonical" href="{{ config('app.url') }}{{ request()->getRequestUri() }}">

    <meta name="format-detection" content="telephone=yes">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Online Workplace Safety Training Ireland | {{ config('app.name') }}">
    <meta property="og:description" content="Online safety training operated by PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED (CRO 822301). Complete online theory modules and WhatsApp practical review for a certificate of completion.">
    <meta property="og:image:alt" content="Progressive Irish Safety - Online Safety Training">
    <meta property="og:image" content="{{ asset('images/metaImage.png') }}">
    
    {{-- Favicons --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

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

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    {{-- FontAwesome Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- Essential Application Stylesheet --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    {{-- Scripts --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('cart', {
            items: JSON.parse(localStorage.getItem('cart') || '[]'),
            save() { localStorage.setItem('cart', JSON.stringify(this.items)) },
            addItem(product) {
                let existing = this.items.find(i => i.id === product.id)
                if(existing){ existing.quantity += product.quantity } 
                else { this.items.push(product) }
                this.save()
            },
            // ... rest of your methods
        })
    })
</script>
    <script src="{{asset('js/cart.js')}}"></script>
    <meta name="google-site-verification" content="LzejX2Dd-6oj32ZQRq5981tz74cTlalGjMXEwe6ZeiI"/>

    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #F1F5F9;
        }
        ::-webkit-scrollbar-thumb {
            background: #CBD5E1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #065F46;
        }
        .hero-pattern {
            background-image: radial-gradient(rgba(6, 95, 70, 0.06) 1px, transparent 1px);
            background-size: 32px 32px;
        }
        .hero-course-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 1rem;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.02);
        }
        .hero-course-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(6, 95, 70, 0.1), 0 10px 10px -5px rgba(6, 95, 70, 0.04);
            border-color: #A7F3D0;
        }
        .card-image-container {
            position: relative;
            height: 220px;
            overflow: hidden;
            background-color: #064E3B;
        }
        .hero-course-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.85;
            transition: transform 0.5s ease;
        }
        .hero-course-card:hover .hero-course-img {
            transform: scale(1.05);
        }
        .image-gradient-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(2, 44, 34, 0.7), transparent 70%);
        }
        .floating-price-tag {
            position: absolute;
            bottom: 12px;
            right: 12px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(4px);
            padding: 6px 14px;
            border-radius: 9999px;
            font-weight: 700;
            color: #065F46;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .card-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            padding: 4px 12px;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
            backdrop-filter: blur(4px);
            z-index: 10;
            background: rgba(236, 253, 245, 0.95);
            color: #047857;
            border: 1px solid #A7F3D0;
        }
        [x-cloak] { display: none !important; }
    </style>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-18547639106"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-18547639106');
</script>
</head>
<body class="bg-surfaceLight text-textMain font-sans antialiased selection:bg-emeraldPrimary selection:text-white" x-data>

    <!-- Navigation Bar -->
    @include('frontIncludes.nav')

    @yield('content')

    <!-- Legal Footer -->
    @include('frontIncludes.footer')

    <!-- JavaScript Interactive Logic -->
    <script>
        const workflowSteps = {
            1: {
                title: "Create Your Student Account",
                desc: "Sign up securely with your email and password to access your student dashboard. Your progress is saved automatically across all your devices.",
                icon: "fa-user-plus",
                tag: "Step 1 of 7"
            },
            2: {
                title: "Buy the Course (€30)",
                desc: "Complete your secure payment of €30 with transparent flat pricing. No hidden fees or unexpected recurring charges.",
                icon: "fa-credit-card",
                tag: "Step 2 of 7"
            },
            3: {
                title: "Complete Online Theory Modules",
                desc: "Work through comprehensive video lessons and learning materials covering spinal mechanics, risk assessment, and safe lifting principles at your own pace.",
                icon: "fa-laptop-code",
                tag: "Step 3 of 7"
            },
            4: {
                title: "Complete Theory Test",
                desc: "Take the structured online theory knowledge assessment to verify your understanding of core safety principles before proceeding.",
                icon: "fa-clipboard-question",
                tag: "Step 4 of 7"
            },
            5: {
                title: "Record & Send Practical Video via WhatsApp",
                desc: "Record a short practical video demonstrating correct lifting and handling technique, and send it directly via WhatsApp to {{ config('global.phone') }}.",
                icon: "fa-video",
                tag: "Step 5 of 7"
            },
            6: {
                title: "Wait for Human Review & Approval",
                desc: "Our qualified safety instructors personally review your practical video submission and theory test results.",
                icon: "fa-user-check",
                tag: "Step 6 of 7"
            },
            7: {
                title: "Certificate of Completion Issued",
                desc: "Upon successful review and approval by our instructors, your official certificate of completion is issued and made available in your account.",
                icon: "fa-award",
                tag: "Step 7 of 7"
            }
        };

        function setWorkflowStep(stepNum) {
            for (let i = 1; i <= 7; i++) {
                const btn = document.getElementById(`step-btn-${i}`);
                if (i === stepNum) {
                    btn.className = "workflow-btn p-4 rounded-xl border text-left transition-all bg-cardLight border-emeraldPrimary text-textMain shadow-md";
                } else {
                    btn.className = "workflow-btn p-4 rounded-xl border text-left transition-all bg-cardLight/70 border-slate-200 text-textMuted hover:border-slate-300";
                }
            }

            const data = workflowSteps[stepNum];
            document.getElementById('workflow-title').innerText = data.title;
            document.getElementById('workflow-desc').innerText = data.desc;
            document.getElementById('workflow-tag').innerText = data.tag;
            document.getElementById('workflow-icon').innerHTML = `<i class="fa-solid ${data.icon}"></i>`;
        }

        function toggleFaq(id) {
            const content = document.getElementById(`faq-content-${id}`);
            const icon = document.getElementById(`faq-icon-${id}`);
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>
<!-- Cookie Consent Banner Component -->
    <div x-data="cookieConsent()">
        
        <!-- Bottom Banner Notification -->
        <div x-show="visible" x-cloak class="fixed bottom-0 left-0 right-0 z-50 p-4 bg-emeraldDark/95 backdrop-blur-md border-t border-emeraldPrimary/30 shadow-2xl text-white transition-all duration-300">
            <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-4">
                
                <!-- Description -->
                <div class="text-sm text-slate-200">
                    <p class="font-semibold text-white mb-1"><i class="fa-solid fa-cookie-bite text-sageAccent mr-2"></i> We value your privacy</p>
                    We use cookies to enhance your browsing experience, analyze site traffic, and personalize content. You can choose your preferences below. Read our <a href="{{route('front.privacy')}}" class="underline text-sageAccent hover:text-emeraldLight">Privacy Policy</a> for more details.
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-3 shrink-0">
                    <button @click="openSettings()" class="px-4 py-2 text-xs font-semibold uppercase tracking-wider text-slate-300 bg-slate-800 hover:bg-slate-700 rounded-lg border border-slate-700 transition">
                        Preferences
                    </button>
                    <button @click="rejectAll()" class="px-4 py-2 text-xs font-semibold uppercase tracking-wider text-white bg-slate-700 hover:bg-slate-600 rounded-lg transition">
                        Reject All
                    </button>
                    <button @click="acceptAll()" class="px-5 py-2 text-xs font-semibold uppercase tracking-wider text-emeraldDark bg-sageAccent hover:bg-emerald-400 font-bold rounded-lg transition shadow-md">
                        Accept All
                    </button>
                </div>
            </div>
        </div>

        <!-- Preferences Modal (Now safely separated and centered on the full screen) -->
        <div x-show="settingsOpen" x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm">
            <div @click.outside="settingsOpen = false" class="bg-cardLight text-textMain rounded-2xl max-w-lg w-full p-6 shadow-2xl border border-slate-200">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold font-display text-emeraldPrimary">Cookie Preferences</h3>
                    <button @click="settingsOpen = false" class="text-textMuted hover:text-textMain"><i class="fa-solid fa-xmark text-lg"></i></button>
                </div>
                
                <p class="text-xs text-textMuted mb-6">Manage how we use cookies on this site. Essential cookies cannot be disabled as they are required for basic site functionality.</p>

                <div class="space-y-4 text-sm">
                    <!-- Essential / Necessary -->
                    <div class="flex items-start justify-between p-3 bg-surfaceLight rounded-xl border border-slate-200">
                        <div>
                            <span class="font-semibold block text-textMain">Essential Cookies</span>
                            <span class="text-xs text-textMuted">Required for core functionality, security, and session management.</span>
                        </div>
                        <input type="checkbox" checked disabled class="mt-1 accent-emeraldPrimary cursor-not-allowed">
                    </div>

                    <!-- Analytics -->
                    <div class="flex items-start justify-between p-3 bg-surfaceLight rounded-xl border border-slate-200">
                        <div>
                            <span class="font-semibold block text-textMain">Analytics & Performance</span>
                            <span class="text-xs text-textMuted">Helps us understand how visitors interact with the website (e.g., Google Analytics).</span>
                        </div>
                        <input type="checkbox" x-model="preferences.analytics" class="mt-1 w-4 h-4 accent-emeraldPrimary rounded cursor-pointer">
                    </div>

                    <!-- Marketing -->
                    <div class="flex items-start justify-between p-3 bg-surfaceLight rounded-xl border border-slate-200">
                        <div>
                            <span class="font-semibold block text-textMain">Marketing & Advertising</span>
                            <span class="text-xs text-textMuted">Used to track visitors across websites to display relevant ads (e.g., Google Ads).</span>
                        </div>
                        <input type="checkbox" x-model="preferences.marketing" class="mt-1 w-4 h-4 accent-emeraldPrimary rounded cursor-pointer">
                    </div>
                </div>

                <div class="mt-6 flex justify-end gap-3">
                    <button @click="settingsOpen = false" class="px-4 py-2 text-xs font-semibold text-textMuted hover:text-textMain">Cancel</button>
                    <button @click="savePreferences()" class="px-5 py-2 text-xs font-semibold text-white bg-emeraldPrimary hover:bg-emeraldHover rounded-lg transition shadow">Save Preferences</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function cookieConsent() {
            return {
                visible: false,
                settingsOpen: false,
                preferences: {
                    analytics: true,
                    marketing: true
                },
                init() {
                    const saved = localStorage.getItem('cookie_consent');
                    if (!saved) {
                        this.visible = true;
                    } else {
                        this.applyConsent(JSON.parse(saved));
                    }
                },
                acceptAll() {
                    const consent = { essential: true, analytics: true, marketing: true, timestamp: new Date().toISOString() };
                    localStorage.setItem('cookie_consent', JSON.stringify(consent));
                    this.applyConsent(consent);
                    this.visible = false;
                },
                rejectAll() {
                    const consent = { essential: true, analytics: false, marketing: false, timestamp: new Date().toISOString() };
                    localStorage.setItem('cookie_consent', JSON.stringify(consent));
                    this.applyConsent(consent);
                    this.visible = false;
                },
                openSettings() {
                    this.settingsOpen = true;
                },
                savePreferences() {
                    const consent = { essential: true, analytics: this.preferences.analytics, marketing: this.preferences.marketing, timestamp: new Date().toISOString() };
                    localStorage.setItem('cookie_consent', JSON.stringify(consent));
                    this.applyConsent(consent);
                    this.settingsOpen = false;
                    this.visible = false;
                },
                applyConsent(consent) {
                    if (typeof gtag === 'function') {
                        gtag('consent', 'update', {
                            'analytics_storage': consent.analytics ? 'granted' : 'denied',
                            'ad_storage': consent.marketing ? 'granted' : 'denied'
                        });
                    }
                }
            }
        }
    </script>



<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="8856b824-d842-4a7d-9cfc-d49471eb15a9";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

</body>
</html>