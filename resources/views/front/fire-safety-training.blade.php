@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">National Standards Hub</span>
                    <h1>Fire Safety <br>Training Online Ireland</h1>
                    <p class="mh-lead-text">
                        The premier **Safety Course** for Irish businesses.
                        Establish total **Fire Safety Compliance Ireland** standards with our structured curriculum. Secure your **Operator Proficiency Verification** and protect your workforce today.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Course — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Compliance Portal</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Fire Safety Background: Best Practices in Ireland</h2>
            <p>In the Republic of Ireland, fire safety awareness is an important priority across commercial and industrial environments. Organizations generally ensure that individuals having responsibility over a premises take all reasonable measures to promote prevention and maintain clear safety protocols on-site.</p>

            <p>This **Safe Operation Curriculum** is designed to satisfy the need for appropriate employee orientation and instruction. Through our **Digital Safety Instruction Online** platform, your team builds a proactive culture of fire prevention, ensuring readiness for internal reviews and operational standards.</p>

            <div class="mh-feature-list">
                <li><strong>Preparedness Shield:</strong> Built around industry-recognized workplace safety frameworks.</li>
                <li><strong>Nationwide Trust:</strong> Widely trusted across Irish facilities and property management standards.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 4 Pillars of Workplace Fire Safety</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🔥</div>
                        <h4>1. Fire Science</h4>
                        <p>Understanding the Fire Triangle—Heat, Fuel, and Oxygen—to effectively disrupt fire growth.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🕵️</div>
                        <h4>2. Hazard Recognition</h4>
                        <p>Identifying common ignition sources: electrical faults, hot works, and general housekeeping.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📢</div>
                        <h4>3. Emergency Response</h4>
                        <p>Mastering alarm systems, evacuation routes, and assembly point protocols for commercial sites.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧯</div>
                        <h4>4. Equipment Mastery</h4>
                        <p>Selecting and operating the correct safety equipment using standard handling techniques.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Physics of Fire: Behavior and Spread</h2>
            <p>A central component of this **Digital Safety Instruction Online** is the study of fire development. Fire is a chemical reaction that follows a predictable path of growth: Incipient, Growth, Fully Developed, and Decay. In modern offices and warehouses, understanding rapid ignition thresholds is essential for safety awareness.</p>

            <p>Our **Safe Operation Curriculum** explores methods of fire spread: <strong>Conduction</strong> (through solid materials), <strong>Convection</strong> (through hot air/smoke), and <strong>Radiation</strong> (through infrared waves). Understanding that smoke management is critical in building environments is essential for any worker seeking **Operator Proficiency Verification**. We emphasize the role of compartmentation and fire-rated doors in protecting escape routes.</p>

            <h3>Common Causes of Workplace Incidents</h3>
            <p>Industry insights highlight preventable causes as the main drivers of commercial property incidents:</p>
            <ul class="mh-v8-list">
                <li><strong>Electrical Faults:</strong> Overloaded sockets and poorly maintained equipment.</li>
                <li><strong>Hot Works:</strong> Unmanaged maintenance or repair activities on site.</li>
                <li><strong>Security Factors:</strong> Proper perimeter oversight and external storage practices.</li>
                <li><strong>General Habits:</strong> Proper disposal procedures in designated areas.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Emergency Evacuation & First-Line Response</h2>
            <p>In an unexpected situation, human behavior benefits greatly from clear orientation. Our **Digital Safety Instruction Online** uses behavioral insights to train workers to recognize alarms immediately and proceed to the nearest exit without hesitation.</p>

            <p>While the primary goal is always safe evacuation, understanding fundamental equipment handling can prevent minor incidents from escalating. This course covers standard application techniques and the critical decision-making process: knowing when to intervene versus when to prioritize evacuation.</p>

            <ul class="mh-feature-list">
                <li><strong>Solid Materials:</strong> Understanding cooling and smothering agents.</li>
                <li><strong>Liquid Exposures:</strong> Appropriate agent selection for fluid-based risks.</li>
                <li><strong>Electrical Risks:</strong> Non-conductive agent awareness.</li>
                <li><strong>Assembly Points:</strong> Best practices for headcount and roll-call procedures.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Workplace Operator Proficiency Verification</h2>
            <p>For HR Managers in Dublin, Cork, and Galway, coordinating in-person safety sessions can present logistical and scheduling challenges. Our **Operator Proficiency Verification** removes these barriers, offering a 100% digital, self-paced curriculum that can be completed on any device in just 45-60 minutes.</p>

            <p>With 24/7 access and instant digital delivery, our **Digital Safety Instruction Online** is an efficient path to professional readiness for modern businesses. Join the professionals who trust our platform to secure their educational credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection