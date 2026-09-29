@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Materials Education Module</span>
                    <h1>Asbestos Awareness <br>Training Online Ireland</h1>
                    <p class="mh-lead-text">
                        The definitive **Safe Operation Curriculum** for Irish construction and maintenance sectors.
                        Secure your **Operator Proficiency Verification** with our modern standards-aligned framework. Professional education regarding building materials and workplace awareness.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Awareness Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Group Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Material Safety Background: The Irish Framework</h2>
            <p>In the Republic of Ireland, building materials history requires careful handling and continuous education across the construction sector. General guidelines encourage ongoing awareness so that any worker who may come into contact with Asbestos-Containing Materials (ACMs) during their work receives proper **Digital Safety Instruction Online**.</p>

            <p>This **Safe Operation Curriculum** is designed to provide introductory "Awareness" level education, which is ideal for tradespeople, architects, and surveyors working on buildings constructed before the year 2000. With a valid **Operator Proficiency Verification**, workers demonstrate a strong foundational knowledge of building safety when handling demolition, maintenance, or refurbishment projects. Our digital platform ensures your team meets educational and skill benchmarks with total clarity.</p>

            <div class="mh-feature-list">
                <li><strong>Shield:</strong> Built around industry best practices for material identification.</li>
                <li><strong>Audit Ready:</strong> Every **Operator Proficiency Verification** features a unique verification ID for your records.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">Core Learning Pillars</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🔬</div>
                        <h4>ACM Identification</h4>
                        <p>Recognizing Asbestos Insulation Board (AIB), Lagging, and Cement in pre-2000 buildings.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⚠️</div>
                        <h4>Risk Evaluation</h4>
                        <p>Understanding the "Friability" of materials and the likelihood of fiber release.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🛑</div>
                        <h4>Best-Practice Protocol</h4>
                        <p>Recommended steps when materials are encountered: Stop, Assess, and Report.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🏥</div>
                        <h4> Material Science</h4>
                        <p>Detailed insight into material composition and historical health considerations.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Science of Materials: Understanding Composition</h2>
            <p>Asbestos is a naturally occurring mineral composed of microscopic fibers. These fibers are so small that they can remain suspended for extended periods once disturbed. Unlike standard dust, these fibers have unique structural characteristics that make understanding their behavior essential for building maintenance professionals.</p>

            <!-- Replaced raw external hotlink with a clean asset or placeholder image tag structure -->
            <img src="{{ asset('images/asbestos-awareness.jpg') }}" alt="Asbestos awareness and material safety illustration" style="max-width:100%; height:auto; margin: 20px 0; border-radius: 8px;">

            <p>Our **Digital Safety Instruction Online** provides a deep dive into material behavior over time. Understanding material aging and handling precautions is a primary driver for achieving total **Operator Proficiency Verification** for your workforce.</p>

            <h3>Common Locations of ACMs</h3>
            <p>Asbestos was used in various building products in Ireland historically. We train your staff to look out for:</p>
            <ul class="mh-feature-list">
                <li><strong>Asbestos Cement:</strong> Common in roof sheeting and water tanks.</li>
                <li><strong>Textured Coatings:</strong> Such as decorative finishes used on ceilings and walls.</li>
                <li><strong>Vinyl Floor Tiles:</strong> Often containing historical binding compounds.</li>
                <li><strong>Loose Fill Insulation:</strong> A traditional form of building insulation requiring careful observation.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>The Materials Management Approach</h2>
            <p>Possessing an **Operator Proficiency Verification** means understanding your role within a broader property management workflow. Building operators and project managers utilize property records and historical surveys before any work begins.</p>

            <p>Our **Safe Operation Curriculum** outlines recommended site safety workflows. If you encounter a material you suspect requires special handling, the recommended procedure is simple: pause work, secure the area, and inform the site supervisor. Do not attempt to alter or dispose of specialized materials independently.</p>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Operator Proficiency Verification</h2>
            <p>For Dublin construction firms and nationwide maintenance contractors, training team members efficiently is vital. Our **Operator Proficiency Verification** removes the need for disruptive classroom schedules. Your workers can complete their **Safe Operation Curriculum** flexibly, ensuring they are well-prepared and verified in just 45 minutes.</p>

            <p>With flexible access and digital delivery, our **Digital Safety Instruction Online** provides a smooth path to professional development for modern teams. Join the professionals who trust our platform for their educational credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Now — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection