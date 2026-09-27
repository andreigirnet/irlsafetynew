@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Life-Critical Response Training</span>
                    <h1>Emergency First Aid <br>at the Workplace</h1>
                    <p class="mh-lead-text">
                        The essential **Safe Operation Curriculum** for the modern Irish workforce.
                        Secure your **Operator Proficiency Verification** with our modern standards-aligned framework. Professional readiness for every workplace emergency.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start First Aid Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Group Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Workplace First Aid: Best-Practice Preparedness</h2>
            <p>In the Republic of Ireland, promoting safety awareness is an important priority across work environments. Organizations generally provide adequate preparation and equipment to ensure team members receive immediate assistance if someone is injured or taken ill.</p>

            <p>This **Safe Operation Curriculum** serves as a vital "Awareness and Theory" foundation for all staff members, supporting general preparedness principles. Through our **Digital Safety Instruction Online**, teams build essential knowledge to act thoughtfully before professional help arrives, ensuring your workplace maintains high standards of safety consciousness.</p>

            <div class="mh-feature-list">
                <li><strong>Preparedness Shield:</strong> Aligned with modern general workplace safety frameworks.</li>
                <li><strong>Audit Ready:</strong> Every **Operator Proficiency Verification** includes a unique verification ID.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The Core Pillars of First Aid</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🚑</div>
                        <h4>1. Scene Assessment</h4>
                        <p>Ensuring the area is secure before approaching a casualty (Danger, Response, Airway, Breathing, Circulation).</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">❤️</div>
                        <h4>2. CPR & AED Concepts</h4>
                        <p>Understanding compression-to-breath ratios and the general deployment of Automated External Defibrillators.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🩹</div>
                        <h4>3. Wound Management</h4>
                        <p>Managing standard cuts, minor bleeds, and treating basic injuries with typical workplace kits.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧠</div>
                        <h4>4. Unconsciousness</h4>
                        <p>Understanding airway management principles and monitoring individuals for signs of shock.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Primary Survey: The DRABC Protocol</h2>
            <p>The foundation of all **Digital Safety Instruction Online** regarding first aid is the <strong>Primary Survey</strong>. This systematic approach ensures that key response priorities are understood. In a high-pressure environment, following a clear framework helps maintain composure and supports effective assistance.</p>

            <p>Our **Safe Operation Curriculum** provides a detailed breakdown of <strong>CPR (Cardiopulmonary Resuscitation)</strong> mechanics. We explore the importance of consistent chest compression awareness—supporting overall preparedness in office and industrial settings alike.</p>

            <h3>Managing the Unconscious Casualty</h3>
            <p>If an individual is unconscious but breathing normally, understanding positioning principles—such as the <strong>Recovery Position</strong>—helps maintain an open airway and ensures safe observation.</p>
        </article>

        <article class="mh-container-content">
            <h2>Common Workplace Incidents & Responses</h2>
            <p>Every **Operator Proficiency Verification** addresses practical scenarios commonly encountered across various work environments, from offices to commercial spaces.</p>

            <ul class="mh-feature-list">
                <li><strong>Obstructed Airways:</strong> Reviewing standard awareness protocols for choking incidents.</li>
                <li><strong>Wound Care:</strong> Applying direct pressure techniques and using proper dressings.</li>
                <li><strong>Thermal Comfort:</strong> Understanding initial cooling procedures for minor heat or liquid exposure.</li>
                <li><strong>General Monitoring:</strong> Ensuring safe observation and timing during unexpected health events.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Workplace Operator Proficiency Verification</h2>
            <p>For HR managers and facilities supervisors, coordinating team training efficiently is a priority. Our **Operator Proficiency Verification** provides a flexible solution without disruptive classroom scheduling. Your team can complete their **Safe Operation Curriculum** at their own pace, ensuring they are well-prepared in under an hour.</p>

            <p>With convenient access and instant digital delivery, our **Digital Safety Instruction Online** is an effective path to professional readiness for modern teams. Join the professionals who trust our platform for their educational credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection