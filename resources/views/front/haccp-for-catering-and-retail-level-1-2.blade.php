@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Verified Food Safety Hub</span>
                    <h1>HACCP Level 1 & 2 <br> Catering & Retail</h1>
                    <p class="mh-lead-text">
                        The definitive **Safe Operation Curriculum** for the Irish food industry.
                        Secure your **Operator Proficiency Verification** with our modern standards-aligned framework. Professional mastery of food safety management systems.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start HACCP Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Group Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Food Safety Background: The Management Framework</h2>
            <p>In the Republic of Ireland, food hygiene standards require careful oversight across commercial kitchens and retail spaces. Organizations generally ensure that all food handlers implement structured food safety management practices based on established **HACCP** (Hazard Analysis and Critical Control Points) principles.</p>

            <p>This **Safe Operation Curriculum** is designed to meet training standards set out for Levels 1 & 2. Through our **Digital Safety Instruction Online**, food handlers in catering and retail build essential knowledge to manage high-risk items safely, reducing risks and maintaining high standards of food hygiene.</p>

            <div class="mh-feature-list">
                <li><strong>Preparedness Shield:</strong> Built around industry food safety and hygiene frameworks.</li>
                <li><strong>Audit Ready:</strong> Every **Operator Proficiency Verification** features a unique verification ID for your records.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 7 Pillars of HACCP Principles</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🔬</div>
                        <h4>1. Hazard Analysis</h4>
                        <p>Identifying biological, chemical, physical, and allergenic hazards in the food handling chain.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🎯</div>
                        <h4>2. Determine CCPs</h4>
                        <p>Pinpointing Critical Control Points where risks can be actively managed or eliminated.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🌡️</div>
                        <h4>3. Critical Limits</h4>
                        <p>Establishing operational parameters, such as target core cooking temperatures.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📋</div>
                        <h4>4. Monitoring</h4>
                        <p>Implementing tracking systems to ensure control points remain within safe thresholds.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>Microbiological Hazards: The Temperature Control Zone</h2>
            <p>A central component of this **Safe Operation Curriculum** is the study of bacterial behavior. Microorganisms require key conditions to thrive: time, nutrients, moisture, and warmth. In catering and retail environments, managing the <strong>temperature control zone</strong> is critical in maintaining food integrity.</p>

            <p>Our **Digital Safety Instruction Online** provides a deep dive into pathogen control and prevention principles. We emphasize the importance of preventing cross-contamination between raw and ready-to-eat products across high-turnover deli and restaurant settings.</p>

            <h3>The 4 Cs of Food Hygiene</h3>
            <p>Mastering the fundamental 4 Cs supports total **Operator Proficiency Verification** for food handling teams:</p>
            <ul class="mh-v8-list">
                <li><strong>Cleaning:</strong> Effective sanitization of surfaces and equipment.</li>
                <li><strong>Cooking:</strong> Reaching proper core temperatures to ensure safety.</li>
                <li><strong>Chilling:</strong> Rapid cooling and storing items at correct low temperatures.</li>
                <li><strong>Cross-Contamination:</strong> Strict physical separation of raw and cooked workflows.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Documentation & Corrective Action</h2>
            <p>Possessing an **Operator Proficiency Verification** means understanding fundamental record-keeping practices. If an operational parameter shifts—for example, if a refrigeration unit fluctuates—staff are trained to implement immediate <strong>Corrective Actions</strong>.</p>

            <ul class="mh-feature-list">
                <li><strong>Traceability:</strong> Maintaining clear supplier and inventory records.</li>
                <li><strong>Allergen Management:</strong> Clear communication regarding dietary ingredients in dishes.</li>
                <li><strong>Pest Control:</strong> Identifying environmental signs and managing facility cleanliness.</li>
                <li><strong>Personal Hygiene:</strong> Mandatory handwashing standards and appropriate protective clothing.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Food Safety Operator Proficiency Verification</h2>
            <p>For restaurateurs and retail managers, coordinating team training efficiently is a priority. Our **Operator Proficiency Verification** removes the need for disruptive on-site scheduling bottlenecks. Your team can complete their **Safe Operation Curriculum** at their own pace, ensuring they are well-prepared in just 60 minutes.</p>

            <p>With convenient access and  digital delivery, our **Digital Safety Instruction Online** is an efficient path to professional readiness for modern businesses. Join the professionals who trust our platform for their educational credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection