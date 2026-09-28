@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Emergency Response Leadership</span>
                    <h1>Fire Warden <br>(Fire Marshal) Training</h1>
                    <p class="mh-lead-text">
                        The gold standard **Safe Operation Curriculum** for Irish safety officers.
                        Establish professional **Fire Safety Compliance Ireland** standards with our modern digital verification. Professional, standards-aligned, and ready for immediate deployment.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Warden Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Group Compliance Portal</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Fire Safety Background: The Warden's Role</h2>
            <p>In the Republic of Ireland, fire safety awareness is a vital operational priority across all commercial environments. Organizations generally ensure that appropriate personnel are appointed and oriented to assist in fire prevention and orderly emergency evacuation.</p>

            <p>This **Safe Operation Curriculum** is specifically tailored to meet high standards for designated safety personnel and team leaders. Through our **Digital Safety Instruction Online**, your wardens are equipped with the knowledge to manage fire drills, identify potential ignition sources, and lead evacuations with total confidence and clarity.</p>

            <div class="mh-feature-list">
                <li><strong>Preparedness Shield:</strong> Built around industry best practices for emergency coordination.</li>
                <li><strong>Digital Credentials:</strong> Your **Operator Proficiency Verification** features a unique verification ID for your records.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 4 Pillars of a Fire Marshal</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🕵️</div>
                        <h4>1. Risk Identification</h4>
                        <p>Daily proactive checks for ignition sources, fuel loads, and unobstructed exit routes.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📢</div>
                        <h4>2. Evacuation Control</h4>
                        <p>Conducting the systematic check of floors, managing assembly points, and accounting for team members.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧯</div>
                        <h4>3. Extinguisher Mastery</h4>
                        <p>Understanding the "Fire Triangle" and identifying the correct equipment for each class of fire.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📝</div>
                        <h4>4. Logbook Management</h4>
                        <p>Maintaining safety registers and ensuring all fire doors and alarms receive regular observation.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Chemistry of Fire: Prevention through Science</h2>
            <p>A central component of obtaining your **Operator Proficiency Verification** is understanding the "Fire Triangle". Fire requires three elements to exist: Heat, Fuel, and Oxygen. By understanding how different materials—from office paper to industrial substances—fuel incidents, safety wardens play a crucial preventative role.</p>

            <p>Furthermore, this **Digital Safety Instruction Online** covers important considerations regarding smoke behavior and rapid ignition thresholds. A Fire Warden must understand the speed at which smoke travels and the importance of fire-rated doors in maintaining compartmentation.</p>

            <h3>Emergency Evacuation: The Systematic Check</h3>
            <p>One of the most vital practical skills covered in this course is conducting a structured floor check. A Fire Warden is trained to inspect assigned zones—including common areas and support rooms—safely and efficiently, ensuring clear communication with emergency response teams.</p>
        </article>

        <article class="mh-container-content">
            <h2>Fire Classification and Mitigation</h2>
            <p>Different situations require specific responses. Using improper equipment can be counterproductive, making a solid understanding of material classes essential for all safety personnel.</p>

            <ul class="mh-feature-list">
                <li><strong>Class A (Wood/Paper):</strong> Water or Foam agents.</li>
                <li><strong>Class B (Flammable Liquids):</strong> Foam, CO2, or Dry Powder.</li>
                <li><strong>Class C (Gases):</strong> Dry Powder solutions.</li>
                <li><strong>Electrical Risks:</strong> Non-conductive agent awareness.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Fire Marshal Operator Proficiency Verification</h2>
            <p>For Dublin offices and nationwide facilities, training multiple Fire Wardens can often present scheduling challenges. Our **Operator Proficiency Verification** removes the need for disruptive on-site visits. Your wardens can complete their **Safe Operation Curriculum** at their own pace, ensuring your building maintains continuous safety leadership.</p>

            <p>Our **Digital Safety Instruction Online** is an efficient solution for modern team development. Join the professionals who trust our platform for their educational safety credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Now — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection