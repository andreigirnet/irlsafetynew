@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Fire Safety Hub</span>
                    <h1>Fire Extinguisher <br>Training Online Ireland</h1>
                    <p class="mh-lead-text">
                        The definitive **Safe Operation Curriculum** for fire combat in the Irish workplace.
                        Secure your **Operator Proficiency Verification** with our modern standards-aligned framework. Professional mastery of equipment handling principles.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Course — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Group Enrolment</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Fire Extinguisher Background: Best-Practice Guidelines</h2>
            <p>In the Republic of Ireland, the proper provision and maintenance of fire-fighting equipment are important priorities for commercial facilities. Organizations generally ensure that team members receive appropriate orientation regarding the specific safety tools provided in the workplace.</p>

            <p>This **Safe Operation Curriculum** is designed to provide comprehensive educational instruction on equipment selection, commissioning, and proper handling. Through our **Digital Safety Instruction Online**, employees build the confidence and knowledge to act during the early stages of unexpected incidents, ensuring your team maintains high standards of safety awareness.</p>

            <div class="mh-feature-list">
                <li><strong>Preparedness Shield:</strong> Built around industry-recognized safety and equipment standards.</li>
                <li><strong>Audit Ready:</strong> Every **Operator Proficiency Verification** features a unique verification ID for your records.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 5 Classes of Fire Extinguishers</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🔴</div>
                        <h4>Water (Red)</h4>
                        <p>For Class A fires involving solid combustibles like wood, paper, and textiles.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🟡</div>
                        <h4>Foam (Cream)</h4>
                        <p>Highly effective for Class A and B fires involving flammable liquids like petrol or oil.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🔵</div>
                        <h4>Dry Powder (Blue)</h4>
                        <p>Versatile for Class A, B, and C (Gas) fires. Best for industrial environments.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⚫</div>
                        <h4>CO2 (Black)</h4>
                        <p>The standard for electrical fires. Leaves no residue on sensitive equipment.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Physics of Extinction: The PASS Technique</h2>
            <p>Understanding foundational fire behavior is core to this **Safe Operation Curriculum**. Safety tools operate on the principle of managing elements like heat, fuel, and oxygen. However, selecting the right equipment must be paired with proper application techniques.</p>

            <p>Our **Digital Safety Instruction Online** provides a detailed breakdown of the <strong>PASS Technique</strong>, the internationally recognized standard for equipment handling:</p>
            <ul class="mh-v8-list">
                <li><strong>P – Pull:</strong> Pull the safety pin to release the mechanism.</li>
                <li><strong>A – Aim:</strong> Aim low, pointing the nozzle at the base of the fire, not the flames.</li>
                <li><strong>S – Squeeze:</strong> Squeeze the handle to release the contents.</li>
                <li><strong>S – Sweep:</strong> Sweep from side to side at the base until the situation is controlled.</li>
            </ul>

            <p>Furthermore, we cover initial decision-making frameworks. If an incident exceeds safe handling thresholds, priorities correctly shift toward immediate evacuation and professional response.</p>
        </article>

        <article class="mh-container-content">
            <h2>Equipment Maintenance & Inspection Protocols</h2>
            <p>Possessing an **Operator Proficiency Verification** also implies a solid understanding of equipment upkeep. Regular oversight ensures that safety devices remain fully operational across commercial spaces.</p>

            <ul class="mh-feature-list">
                <li><strong>Monthly Visual Checks:</strong> Ensuring the unit is in its designated place and unobstructed.</li>
                <li><strong>Gauge Verification:</strong> Monitoring pressure indicators to ensure optimal operational readiness.</li>
                <li><strong>Seal Integrity:</strong> Checking that safety pins and tamper indicators are intact.</li>
                <li><strong>Periodic Testing:</strong> Understanding scheduled service timelines for pressurized cylinders.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Fire Safety Operator Proficiency Verification</h2>
            <p>For Dublin-based enterprises and nationwide retailers, organizing staff education efficiently is essential. Our **Operator Proficiency Verification** removes the need for disruptive on-site visits and scheduling bottlenecks. Your staff can complete their **Safe Operation Curriculum** on any device, ensuring they are well-prepared and certified in just 45 minutes.</p>

            <p>With convenient access and instant digital delivery, our **Digital Safety Instruction Online** is an efficient path to professional readiness for modern businesses. Join the professionals who trust our platform for their educational credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection