@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Corporate Ergonomics Hub</span>
                    <h1>Office Health & <br>Safety Training Online</h1>
                    <p class="mh-lead-text">
                        The definitive **Safe Operation Curriculum** for the modern Irish office environment.
                        Secure your **Operator Proficiency Verification** with our modern standards-aligned framework. Professional safety education for the digital workplace.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Office Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Team Packages</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Office Safety Background: Workplace Well-Being</h2>
            <p>In the Republic of Ireland, maintaining a healthy corporate environment is an important priority across all sectors. Organizations generally ensure that office spaces receive proper oversight in ergonomics, workstation setup, and general workspace well-being.</p>

            <p>This **Safe Operation Curriculum** provides essential educational orientation for office managers and team members alike. Through our **Digital Safety Instruction Online**, your workforce builds proactive habits in posture and equipment usage, ensuring high standards of comfort and operational readiness.</p>

            <div class="mh-feature-list">
                <li><strong>Preparedness Shield:</strong> Built around industry best practices for office ergonomics and safety.</li>
                <li><strong>Audit Ready:</strong> Every **Operator Proficiency Verification** features a unique verification ID for your records.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">Core Office Safety Pillars</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🪑</div>
                        <h4>1. DSE Ergonomics</h4>
                        <p>Optimizing workstations to prevent strain and support comfortable posture during long hours.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🔌</div>
                        <h4>2. Electrical Safety</h4>
                        <p>Managing cord organization and ensuring proper equipment care across office hardware.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧘</div>
                        <h4>3. Mental Wellbeing</h4>
                        <p>Recognizing focus balance, healthy pacing, and promoting a positive workplace culture.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🚧</div>
                        <h4>4. Slips & Trips</h4>
                        <p>Managing common environmental hazards like loose cabling or surface moisture.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Mechanics of the Workstation: DSE Ergonomics</h2>
            <p>A central component of this **Safe Operation Curriculum** is the study of **Postural Alignment**. Prolonged sitting in non-optimized positions can lead to muscle fatigue and discomfort. Learning proper ergonomics helps maintain physical well-being throughout the workday.</p>

            <p>Our **Digital Safety Instruction Online** provides a deep dive into alignment principles. We demonstrate how to adjust seat height, monitor distance, and keyboard positioning to maintain a comfortable posture. Understanding the importance of regular movement breaks is critical for achieving total **Operator Proficiency Verification** for your administrative staff.</p>

            <h3>Electrical Safety & Cable Management</h3>
            <p>Offices are high-density technology environments. We train your staff to recognize proper power distribution and equipment care. Cable management supports both a tidy workspace and general preventive awareness.</p>
        </article>

        <article class="mh-container-content">
            <h2>Beyond the Desk: Environmental Safety</h2>
            <p>Possessing an **Operator Proficiency Verification** means understanding the broader office ecosystem. Awareness of building layouts, common areas, and safety routes helps maintain a secure environment for everyone.</p>

            <ul class="mh-feature-list">
                <li><strong>Handling Awareness:</strong> Recognizing safe lifting techniques for everyday office items.</li>
                <li><strong>Well-Being Focus:</strong> Supporting healthy work habits and balanced daily routines.</li>
                <li><strong>Communal Spaces:</strong> Maintaining safety and cleanliness in shared breakrooms.</li>
                <li><strong>Emergency Preparedness:</strong> Familiarity with safety equipment locations and emergency routes.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Corporate Operator Proficiency Verification</h2>
            <p>For HR managers and operations directors, coordinating training for a hybrid workforce can present scheduling challenges. Our **Operator Proficiency Verification** removes the need for disruptive on-site consultants. Your team can complete their **Safe Operation Curriculum** at their own pace—whether in the office or working remotely—ensuring they are well-prepared in just 45 minutes.</p>

            <p>With convenient access and instant digital delivery, our **Digital Safety Instruction Online** is an efficient path to professional readiness for modern businesses. Join the professionals who trust our platform for their educational credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Your Team — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection