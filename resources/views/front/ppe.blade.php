@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">The Last Line of Defense</span>
                    <h1>PPE Training Online <br> (Personal Protective Equipment)</h1>
                    <p class="mh-lead-text">
                        The essential **Safe Operation Curriculum** for the Irish industrial workforce.
                        Secure your **Operator Proficiency Verification** with our modern standards-aligned framework. Master the selection, use, and maintenance of specialized equipment.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start PPE Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Group Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>PPE Background: Equipment Selection & Use</h2>
            <p>In the Republic of Ireland, the proper provision and use of Personal Protective Equipment are important priorities across industrial work environments. Organizations generally ensure that suitable equipment is available where potential hazards require an extra layer of individual protection.</p>

            <p>This **Safe Operation Curriculum** serves as a vital foundation for understanding the "Hierarchy of Control". Protective gear is positioned as a key supportive measure in workplace safety—designed to protect the wearer when environmental controls are utilized. Through our **Digital Safety Instruction Online**, employees build essential knowledge regarding proper equipment fit, care, and appropriate application.</p>

            <div class="mh-feature-list">
                <li><strong>Preparedness Shield:</strong> Aligned with modern industry standards and equipment guidelines.</li>
                <li><strong>Audit Ready:</strong> Every **Operator Proficiency Verification** includes a unique verification ID for your records.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 4 Pillars of PPE Compliance</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">👷</div>
                        <h4>1. Head & Face</h4>
                        <p>Understanding safety helmets, impact-resistant eye protection, and hearing conservation standards.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🫁</div>
                        <h4>2. Respiratory (RPE)</h4>
                        <p>Mastering the selection of filtration masks and the importance of proper fit checks.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧤</div>
                        <h4>3. Hand & Skin</h4>
                        <p>Selecting the correct mechanical or chemical resistant gloves for specific industrial tasks.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🥾</div>
                        <h4>4. Body & Feet</h4>
                        <p>High-visibility apparel and specialized safety footwear for total environmental awareness.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Hierarchy of Control: Equipment Context</h2>
            <p>The foundation of all **Digital Safety Instruction Online** regarding protective equipment is the <strong>Hierarchy of Control</strong>. Protective gear is part of a broader system designed to manage workplace risks effectively.</p>

            <p>Our **Safe Operation Curriculum** provides a detailed look at certified equipment markings. We explain the technical importance of ensuring all gear meets performance standards for quality and reliability across demanding sectors like construction and manufacturing.</p>

            <h3>The Importance of Compatibility</h3>
            <p>A common operational oversight is a lack of equipment compatibility—for example, wearing specific safety helmets that interfere with the seal of hearing protection or respiratory masks. Our training ensures workers know how to perform proper checks before entering specialized work zones.</p>
        </article>

        <article class="mh-container-content">
            <h2>Maintenance, Storage & Shelf-Life</h2>
            <p>Every **Operator Proficiency Verification** addresses the lifespan of safety equipment, particularly polymers used in protective gear and harnesses.</p>

            <ul class="mh-feature-list">
                <li><strong>Pre-Use Inspection:</strong> Checking for wear, UV degradation, or structural flaws in materials.</li>
                <li><strong>Sanitization:</strong> Proper cleaning protocols for reusable items to maintain hygiene.</li>
                <li><strong>Correct Storage:</strong> Keeping equipment away from direct sunlight, moisture, and extreme temperatures.</li>
                <li><strong>Defect Reporting:</strong> Encouraging prompt reporting of any loss or damage to equipment.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Industrial Operator Proficiency Verification</h2>
            <p>For project managers and warehouse supervisors, coordinating team training efficiently is a priority. Our **Operator Proficiency Verification** removes the need for disruptive scheduling bottlenecks. Your team can complete their **Safe Operation Curriculum** at their own pace, ensuring they are well-prepared in under an hour.</p>

            <p>With convenient access and  digital delivery, our **Digital Safety Instruction Online** is an efficient path to professional readiness for modern teams. Join the professionals who trust our platform for their educational credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection