@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">High-Risk Entry Compliance</span>
                    <h1>Working in Confined <br> Spaces Training Online</h1>
                    <p class="mh-lead-text">
                        The definitive **Safe Operation Curriculum** for Irish industrial and utility sectors.
                        Secure your **Operator Proficiency Verification** with our modern standards-aligned framework. Professional mastery of life-critical entry protocols.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Entry Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Group Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Confined Space Background: Operational Framework</h2>
            <p>In the Republic of Ireland, working in enclosed and restricted spaces requires careful preparation and structured oversight across industrial environments. Safe operations rely on thorough planning and avoiding entry whenever alternative methods are practical.</p>

            <p>This **Safe Operation Curriculum** provides essential educational orientation for designated personnel. Before any specialized activity occurs, robust risk assessments and structured work permits are utilized. Through our **Digital Safety Instruction Online**, your team builds critical knowledge regarding entry procedures, observation roles, and safety readiness.</p>

            <div class="mh-feature-list">
                <li><strong>Preparedness Shield:</strong> Built around industry best practices for high-risk environments.</li>
                <li><strong>Audit Ready:</strong> Every **Operator Proficiency Verification** features a unique verification ID for your records.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">Core Safety Pillars</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">☣️</div>
                        <h4>1. Atmospheric Testing</h4>
                        <p>Monitoring oxygen levels, evaluating vapor conditions, and ensuring stable air quality.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📇</div>
                        <h4>2. Work Permits</h4>
                        <p>Formalizing entry protocols, isolation methods, and communication workflows.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧗</div>
                        <h4>3. Access & Egression</h4>
                        <p>Mastering the use of tripods, winches, and retrieval systems for vertical entry management.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🆘</div>
                        <h4>4. Emergency Response</h4>
                        <p>Establishing non-entry recovery plans and understanding the vital role of standby personnel.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Science of Atmospheric Awareness</h2>
            <p>A central component of this **Safe Operation Curriculum** is the study of atmospheric conditions. Many incidents in restricted spaces involve subtle changes in air composition that require specialized monitoring equipment and disciplined observation.</p>

            <p>Our **Digital Safety Instruction Online** provides a deep dive into oxygen monitoring and ventilation principles. Understanding normal atmospheric thresholds and potential displacement factors is a prerequisite for achieving total **Operator Proficiency Verification**.</p>

            <h3>Defining Restricted Spaces</h3>
            <p>A confined space is any enclosed area where specific atmospheric or physical hazards may accumulate. We train your staff to recognize:</p>
            <ul class="mh-feature-list">
                <li><strong>Enclosed Spaces:</strong> Vats, silos, chambers, and utility vaults.</li>
                <li><strong>Restricted Access:</strong> Areas where entry and exit points are limited.</li>
                <li><strong>Material Flow Risks:</strong> Zones where loose particulate matter requires extra caution.</li>
                <li><strong>Thermal Environments:</strong> Areas with extreme temperature variations.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Standby Personnel & Response Protocols</h2>
            <p>Possessing an **Operator Proficiency Verification** means understanding the critical importance of the **Standby Person**. Safe operations depend on maintaining external communication and utilizing proper retrieval systems without endangering support staff.</p>

            <p>Our **Safe Operation Curriculum** outlines non-entry recovery systems. In the event of an unexpected situation, standby personnel initiate established emergency procedures, communicate via radio, and utilize mechanical retrieval devices (such as winches) to assist safely.</p>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Confined Space Operator Proficiency Verification</h2>
            <p>For utility firms and industrial contractors, training team members for high-risk environments can present scheduling challenges. Our **Operator Proficiency Verification** removes the need for disruptive on-site classroom bottlenecks. Your team can complete their **Safe Operation Curriculum** flexibly, ensuring they are well-prepared in just 60 minutes.</p>

            <p>With convenient access and instant digital delivery, our **Digital Safety Instruction Online** is an efficient path to professional readiness for modern businesses. Join the professionals who trust our platform for their educational credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection