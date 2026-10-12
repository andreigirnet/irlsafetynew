@extends('front.app')
@section('content')
    <section class="relative overflow-hidden hero-pattern py-20 lg:py-32 border-b border-slate-200 bg-gradient-to-b from-white via-surfaceLight to-surfaceLight">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center space-x-2 bg-emeraldLight border border-emeraldBorder px-3.5 py-1.5 rounded-full text-xs font-semibold text-emeraldPrimary">
                        <span class="w-2 h-2 rounded-full bg-sageAccent"></span>
                        <span>Online theory + practical video review</span>
                    </div>
                    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-extrabold text-textMain tracking-tight leading-tight">
                        Online Manual Handling Training in <span class="text-emeraldPrimary">Ireland</span>
                    </h1>
                    <p class="text-lg text-textMuted max-w-2xl leading-relaxed">
                        Ireland Safety Course is an independent training provider operated by Progressive Velocity Fast Solutions Limited. We are not affiliated with, endorsed by, or an official representative of any government body or third-party brand.
                    </p>
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center space-y-4 sm:space-y-0 sm:space-x-4 pt-4">
                        <a href="{{ url('/register') }}" class="bg-emeraldPrimary hover:bg-emeraldHover text-white font-semibold px-8 py-4 rounded-xl shadow-xl shadow-emeraldPrimary/25 text-center transition-all hover:scale-105">
                            Register and enrol (€30)
                        </a>
                        <a href="#workflow" class="bg-cardLight hover:bg-slate-100 text-textMain font-semibold px-8 py-4 rounded-xl border border-slate-200 text-center transition-all shadow-sm">
                            See how it works
                        </a>
                    </div>
                    <p class="text-sm text-textMuted">
                        Already registered? <a href="{{ url('/login') }}" class="text-emeraldPrimary font-semibold underline">Log in</a>
                    </p>
                    <div class="grid grid-cols-3 gap-4 pt-8 border-t border-slate-200 text-sm text-textMuted">
                        <div>
                            <span class="block font-bold text-textMain text-lg">€30</span>
                            Flat price
                        </div>
                        <div>
                            <span class="block font-bold text-textMain text-lg">Online + WhatsApp</span>
                            Practical assessment
                        </div>
                        <div>
                            <span class="block font-bold text-textMain text-lg">Instructor review</span>
                            Before certificate
                        </div>
                    </div>
                </div>

                <!-- Hero Card -->
                <div class="lg:col-span-5">
                    <div class="hero-course-card">
                        <div class="card-image-container">
                            <img src="{{ asset('images/lifting.webp') }}" alt="Person lifting a box using manual handling technique" class="hero-course-img">
                            <div class="image-gradient-overlay"></div>
                            <div class="floating-price-tag">
                                <span class="currency">€</span>30
                            </div>
                        </div>

                        <div class="p-6 sm:p-8">
                            <span class="text-xs font-bold text-emeraldPrimary uppercase tracking-wider block mb-1">Online Training</span>
                            <h3 class="font-display font-bold text-2xl text-textMain mb-2">Manual Handling Training</h3>
                            <p class="text-textMuted text-sm mb-6">Online theory covering the spine, safe lifting principles and risk assessment, followed by a practical video review.</p>

                            <div class="space-y-3 mb-8 text-sm text-textMain">
                                <div class="flex items-center space-x-3">
                                    <i class="fa-solid fa-circle-check text-emeraldPrimary"></i>
                                    <span>Self-paced online theory slides</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fa-solid fa-circle-check text-emeraldPrimary"></i>
                                    <span>Online theory test</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fa-solid fa-circle-check text-emeraldPrimary"></i>
                                    <span>Practical lifting video sent via WhatsApp</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fa-solid fa-circle-check text-emeraldPrimary"></i>
                                    <span>Certificate of completion after instructor approval</span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between pt-6 border-t border-slate-100">
                                <div>
                                    <span class="text-xs text-textMuted block">Price</span>
                                    <span class="font-display font-extrabold text-3xl text-textMain">€30</span>
                                </div>
                                <a href="{{ url('/register') }}" class="bg-emeraldPrimary hover:bg-emeraldHover text-white font-semibold px-6 py-3 rounded-xl transition-all shadow-md shadow-emeraldPrimary/20 text-center">
                                    Register and enrol
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Section -->
    <section class="py-16 bg-white border-b border-slate-200" id="course">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-textMain mb-4">Our course</h2>
                <p class="text-textMuted">
                    Ireland Safety Course is an independent training provider operated by Progressive Velocity Fast Solutions Limited. We are not affiliated with, endorsed by, or an official representative of any government body or third-party brand.
                </p>
            </div>

            <div class="max-w-md mx-auto hero-course-card">
                <div class="card-image-container">
                    <img src="{{ asset('/images/lifting.webp') }}" alt="Manual handling lifting technique" class="hero-course-img">
                    <div class="image-gradient-overlay"></div>
                    <div class="floating-price-tag">
                        <span class="currency">€</span>30
                    </div>
                </div>

                <div class="p-6 sm:p-8">
                    <h3 class="font-display font-bold text-xl text-textMain mb-2">Manual Handling Training</h3>
                    <p class="text-textMuted text-sm mb-6">Online theory slides, a theory test, and a practical video reviewed by an instructor.</p>

                    <ul class="space-y-2.5 text-sm text-textMain mb-8">
                        <li class="flex items-center space-x-2"><i class="fa-solid fa-check text-emeraldPrimary text-xs"></i><span>Register an account and pay online</span></li>
                        <li class="flex items-center space-x-2"><i class="fa-solid fa-check text-emeraldPrimary text-xs"></i><span>Study on mobile, tablet or computer</span></li>
                        <li class="flex items-center space-x-2"><i class="fa-solid fa-check text-emeraldPrimary text-xs"></i><span>Send your practical video on WhatsApp: +353899735295</span></li>
                    </ul>

                    <a href="{{ url('/register') }}" class="block w-full bg-emeraldPrimary hover:bg-emeraldHover text-white font-semibold py-3.5 rounded-xl transition-all shadow-lg shadow-emeraldPrimary/20 text-center">
                        Register and enrol (€30)
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Workflow Section -->
    <section class="py-20 bg-surfaceLight relative border-b border-slate-200" id="workflow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-emeraldPrimary font-semibold text-sm tracking-wider uppercase">Seven steps</span>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-textMain mt-2 mb-4">How the course works</h2>
                <p class="text-textMuted">
                    From registration to your certificate of completion, this is the full journey.
                </p>
            </div>

            <!-- Stepper -->
            <div class="grid grid-cols-1 lg:grid-cols-7 gap-3 mb-12">
                <button onclick="setWorkflowStep(1)" id="step-btn-1" class="workflow-btn p-4 rounded-xl border text-left transition-all bg-cardLight border-emeraldPrimary text-textMain shadow-md">
                    <span class="text-xs font-bold text-emeraldPrimary block mb-1">STEP 01</span>
                    <span class="font-semibold text-xs block">Register</span>
                </button>
                <button onclick="setWorkflowStep(2)" id="step-btn-2" class="workflow-btn p-4 rounded-xl border text-left transition-all bg-cardLight/70 border-slate-200 text-textMuted hover:border-slate-300">
                    <span class="text-xs font-bold text-textMuted block mb-1">STEP 02</span>
                    <span class="font-semibold text-xs block">Buy the course (€30)</span>
                </button>
                <button onclick="setWorkflowStep(3)" id="step-btn-3" class="workflow-btn p-4 rounded-xl border text-left transition-all bg-cardLight/70 border-slate-200 text-textMuted hover:border-slate-300">
                    <span class="text-xs font-bold text-textMuted block mb-1">STEP 03</span>
                    <span class="font-semibold text-xs block">Online slides</span>
                </button>
                <button onclick="setWorkflowStep(4)" id="step-btn-4" class="workflow-btn p-4 rounded-xl border text-left transition-all bg-cardLight/70 border-slate-200 text-textMuted hover:border-slate-300">
                    <span class="text-xs font-bold text-textMuted block mb-1">STEP 04</span>
                    <span class="font-semibold text-xs block">Theory test</span>
                </button>
                <button onclick="setWorkflowStep(5)" id="step-btn-5" class="workflow-btn p-4 rounded-xl border text-left transition-all bg-cardLight/70 border-slate-200 text-textMuted hover:border-slate-300">
                    <span class="text-xs font-bold text-textMuted block mb-1">STEP 05</span>
                    <span class="font-semibold text-xs block">WhatsApp video</span>
                </button>
                <button onclick="setWorkflowStep(6)" id="step-btn-6" class="workflow-btn p-4 rounded-xl border text-left transition-all bg-cardLight/70 border-slate-200 text-textMuted hover:border-slate-300">
                    <span class="text-xs font-bold text-textMuted block mb-1">STEP 06</span>
                    <span class="font-semibold text-xs block">Instructor review</span>
                </button>
                <button onclick="setWorkflowStep(7)" id="step-btn-7" class="workflow-btn p-4 rounded-xl border text-left transition-all bg-cardLight/70 border-slate-200 text-textMuted hover:border-slate-300">
                    <span class="text-xs font-bold text-textMuted block mb-1">STEP 07</span>
                    <span class="font-semibold text-xs block">Certificate issued</span>
                </button>
            </div>

            <!-- Detail card -->
            <div class="bg-cardLight border border-slate-200 rounded-2xl p-8 lg:p-12 shadow-xl relative overflow-hidden">
                <div id="workflow-content" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-8 space-y-4">
                        <div class="inline-flex items-center space-x-2 bg-emeraldLight text-emeraldPrimary px-3 py-1 rounded-full text-xs font-bold border border-emeraldBorder">
                            <i class="fa-solid fa-arrow-right"></i>
                            <span id="workflow-tag">Step 1 of 7</span>
                        </div>
                        <h3 id="workflow-title" class="font-display font-bold text-2xl sm:text-3xl text-textMain">Register your account</h3>
                        <p id="workflow-desc" class="text-textMuted text-base sm:text-lg leading-relaxed">
                            Sign up with your email and a password to open your dashboard. Your progress is saved across your devices.
                        </p>
                    </div>
                    <div class="lg:col-span-4 flex flex-col items-center justify-center bg-surfaceLight p-8 rounded-xl border border-slate-200 text-center">
                        <div id="workflow-icon" class="w-16 h-16 rounded-2xl bg-emeraldLight text-emeraldPrimary flex items-center justify-center text-3xl mb-4 shadow-sm border border-emeraldBorder">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>
                        <span class="text-xs text-textMuted font-medium">PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About the certificate -->
    <section class="py-20 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 space-y-6">
                    <h2 class="font-display text-3xl sm:text-4xl font-bold text-textMain">About the certificate</h2>
                    <p class="text-textMuted leading-relaxed">
                        The certificate is a private certificate of completion issued by Progressive Velocity Fast Solutions Limited. It shows that you completed our training. It is not a State qualification, and whether it meets the requirements of a particular workplace is for the employer to decide.
                    </p>
                    <div class="space-y-4 pt-2">
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 rounded-full bg-emeraldLight text-emeraldPrimary flex items-center justify-center text-xs mt-1 shrink-0 border border-emeraldBorder"><i class="fa-solid fa-check"></i></div>
                            <div>
                                <h4 class="font-semibold text-textMain">When it is issued</h4>
                                <p class="text-textMuted text-sm">After you pass the online theory test and an instructor approves your WhatsApp practical video. It is not issued automatically.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 rounded-full bg-emeraldLight text-emeraldPrimary flex items-center justify-center text-xs mt-1 shrink-0 border border-emeraldBorder"><i class="fa-solid fa-check"></i></div>
                            <div>
                                <h4 class="font-semibold text-textMain">Price</h4>
                                <p class="text-textMuted text-sm">€30, paid once, with no hidden fees or subscriptions.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 rounded-full bg-emeraldLight text-emeraldPrimary flex items-center justify-center text-xs mt-1 shrink-0 border border-emeraldBorder"><i class="fa-solid fa-check"></i></div>
                            <div>
                                <h4 class="font-semibold text-textMain">Questions</h4>
                                <p class="text-textMuted text-sm">Call or message us on WhatsApp at +353899735295.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="bg-cardLight border border-slate-200 p-8 rounded-2xl shadow-xl space-y-6">
                        <h3 class="font-display font-bold text-xl text-textMain border-b border-slate-100 pb-4">Company details</h3>
                        <div class="space-y-4 text-sm">
                            <div class="flex justify-between py-2 border-b border-slate-100">
                                <span class="text-textMuted">Company name</span>
                                <span class="font-medium text-textMain text-right">PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-slate-100">
                                <span class="text-textMuted">Company number (CRO)</span>
                                <span class="font-medium text-textMain text-right">822301</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-slate-100">
                                <span class="text-textMuted">Registered address</span>
                                <span class="font-medium text-textMain text-right">51 Bracken Road, Dublin, D18 CV48, Ireland</span>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="text-textMuted">Phone / WhatsApp</span>
                                <span class="font-medium text-textMain text-right">+353899735295</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-surfaceLight border-b border-slate-200" id="faq">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-textMain mt-2 mb-4">Frequently asked questions</h2>
                <p class="text-textMuted">Answers about the course, the practical video and the certificate.</p>
            </div>

            <div class="space-y-4">
                <div class="bg-cardLight border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                    <button onclick="toggleFaq(1)" class="w-full p-6 text-left flex items-center justify-between font-semibold text-textMain hover:text-emeraldPrimary transition-colors">
                        <span>How does the practical video work?</span>
                        <i id="faq-icon-1" class="fa-solid fa-chevron-down text-textMuted transition-transform"></i>
                    </button>
                    <div id="faq-content-1" class="hidden px-6 pb-6 text-textMuted text-sm leading-relaxed border-t border-slate-100 pt-4">
                        After you pass the online theory test, record a short video of yourself lifting an object using the technique shown in the course slides. Send it on WhatsApp to +353899735295. An instructor reviews it and replies with the result. Please film only yourself and make sure no other people are visible.
                    </div>
                </div>

                <div class="bg-cardLight border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                    <button onclick="toggleFaq(2)" class="w-full p-6 text-left flex items-center justify-between font-semibold text-textMain hover:text-emeraldPrimary transition-colors">
                        <span>When will I receive my certificate?</span>
                        <i id="faq-icon-2" class="fa-solid fa-chevron-down text-textMuted transition-transform"></i>
                    </button>
                    <div id="faq-content-2" class="hidden px-6 pb-6 text-textMuted text-sm leading-relaxed border-t border-slate-100 pt-4">
                        Your certificate of completion is issued after you pass the theory test and an instructor approves your practical video. It is not issued automatically.
                    </div>
                </div>

                <div class="bg-cardLight border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                    <button onclick="toggleFaq(3)" class="w-full p-6 text-left flex items-center justify-between font-semibold text-textMain hover:text-emeraldPrimary transition-colors">
                        <span>What kind of certificate is it?</span>
                        <i id="faq-icon-3" class="fa-solid fa-chevron-down text-textMuted transition-transform"></i>
                    </button>
                    <div id="faq-content-3" class="hidden px-6 pb-6 text-textMuted text-sm leading-relaxed border-t border-slate-100 pt-4">
                        It is a private certificate of completion issued by Progressive Velocity Fast Solutions Limited. It is not a State-accredited qualification. If your employer needs a specific type of training or certificate, please check with them before you enrol.
                    </div>
                </div>

                <div class="bg-cardLight border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                    <button onclick="toggleFaq(4)" class="w-full p-6 text-left flex items-center justify-between font-semibold text-textMain hover:text-emeraldPrimary transition-colors">
                        <span>How much does the course cost?</span>
                        <i id="faq-icon-4" class="fa-solid fa-chevron-down text-textMuted transition-transform"></i>
                    </button>
                    <div id="faq-content-4" class="hidden px-6 pb-6 text-textMuted text-sm leading-relaxed border-t border-slate-100 pt-4">
                        The course costs €30. There are no hidden fees and no subscription.
                    </div>
                </div>

                <div class="bg-cardLight border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                    <button onclick="toggleFaq(5)" class="w-full p-6 text-left flex items-center justify-between font-semibold text-textMain hover:text-emeraldPrimary transition-colors">
                        <span>What happens to my practical video?</span>
                        <i id="faq-icon-5" class="fa-solid fa-chevron-down text-textMuted transition-transform"></i>
                    </button>
                    <div id="faq-content-5" class="hidden px-6 pb-6 text-textMuted text-sm leading-relaxed border-t border-slate-100 pt-4">
                        Videos are sent by WhatsApp, a service provided by Meta. We review your video to assess your technique, and delete it from our devices and systems once the assessment is complete. A copy may remain in your own chat history, which you can delete yourself. Our Privacy Policy, linked in the footer, has the full details.
                    </div>
                </div>

                <div class="bg-cardLight border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                    <button onclick="toggleFaq(6)" class="w-full p-6 text-left flex items-center justify-between font-semibold text-textMain hover:text-emeraldPrimary transition-colors">
                        <span>Who runs Ireland Safety Course?</span>
                        <i id="faq-icon-6" class="fa-solid fa-chevron-down text-textMuted transition-transform"></i>
                    </button>
                    <div id="faq-content-6" class="hidden px-6 pb-6 text-textMuted text-sm leading-relaxed border-t border-slate-100 pt-4">
                        Ireland Safety Course is an independent training provider operated by Progressive Velocity Fast Solutions Limited. We are not affiliated with, endorsed by, or an official representative of any government body or third-party brand. Company number (CRO) 822301, registered address 51 Bracken Road, Dublin, D18 CV48, Ireland.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-white border-b border-slate-200" id="contact">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center space-y-6">
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-textMain">Need help enrolling or sending your video?</h2>
                <p class="text-textMuted">
                    Call us or message us on WhatsApp.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                    <a href="tel:+353899735295" class="w-full sm:w-auto bg-surfaceLight hover:bg-slate-100 border border-slate-200 text-textMain font-semibold px-8 py-4 rounded-xl flex items-center justify-center space-x-3 transition-all shadow-sm">
                        <i class="fa-solid fa-phone text-emeraldPrimary"></i>
                        <span>+353899735295</span>
                    </a>
                    <a href="https://wa.me/353899735295" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto bg-emerald-600 hover:bg-emerald-500 text-white font-semibold px-8 py-4 rounded-xl flex items-center justify-center space-x-3 transition-all shadow-lg shadow-emerald-600/20">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                        <span>Chat on WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Workflow and FAQ Script Logic -->
    <script>
        const workflowSteps = {
            1: {
                title: "Register your account",
                desc: "Sign up with your email and a password to open your dashboard. Your progress is saved across your devices.",
                icon: "fa-user-plus",
                tag: "Step 1 of 7"
            },
            2: {
                title: "Buy the course (€30)",
                desc: "Pay €30 securely online. There are no hidden fees and no recurring charges.",
                icon: "fa-credit-card",
                tag: "Step 2 of 7"
            },
            3: {
                title: "Complete the online slides",
                desc: "Work through the theory slides on the spine, risk assessment and safe lifting principles, at your own pace.",
                icon: "fa-laptop-code",
                tag: "Step 3 of 7"
            },
            4: {
                title: "Take the theory test",
                desc: "Answer the online test questions to check your understanding of the theory before the practical step.",
                icon: "fa-clipboard-question",
                tag: "Step 4 of 7"
            },
            5: {
                title: "Record and send your practical video",
                desc: "Record a short video of yourself lifting an object with the technique shown in the course, and send it on WhatsApp to +353899735295.",
                icon: "fa-video",
                tag: "Step 5 of 7"
            },
            6: {
                title: "Wait for the instructor's review",
                desc: "An instructor reviews your practical video and your theory test result. Certificates are not issued automatically.",
                icon: "fa-user-check",
                tag: "Step 6 of 7"
            },
            7: {
                title: "Certificate of completion issued",
                desc: "Once the instructor approves your video, your certificate of completion is issued and made available in your account.",
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
@endsection