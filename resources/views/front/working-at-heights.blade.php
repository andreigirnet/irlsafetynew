@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Professional Height Safety Ecosystem</span>
                    <h1>Working at Heights <br>Training Online Ireland</h1>
                    <p class="mh-lead-text">
                        The definitive **Safe Operation Curriculum** for the Irish construction and industrial sectors.
                        Secure your **Operator Proficiency Verification** through our modern standards-aligned digital platform.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Enrol Individual — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Request Enterprise Quote</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Height Safety Background: Operational Principles</h2>
            <p>In the Republic of Ireland, maintaining high standards for elevated tasks is an important priority across industrial environments. Safe operations are defined by proactive planning and appropriate equipment use whenever elevated work takes place. Through our **Digital Safety Instruction Online**, teams build essential knowledge for safe procedures ranging from ladder usage to specialized maintenance tasks.</p>

            <p>Organizations generally maintain structured risk assessments and operational workflows to support safe working practices. Our **Safe Operation Curriculum** provides the specific knowledge required to build robust safety habits, ensuring that your organization maintains high standards of operational readiness.</p>

            <div class="mh-feature-list">
                <li><strong>Employer Duty:</strong> To provide adequate instruction, orientation, and equipment.</li>
                <li><strong>Employee Duty:</strong> To utilize safety systems properly and report equipment observations.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The Hierarchy of Fall Protection</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🚫</div>
                        <h4>1. Avoidance</h4>
                        <p>Can work be completed from the ground level? Using specialized reach tools is a preferred primary safety measure.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🛡️</div>
                        <h4>2. Prevention</h4>
                        <p>Using collective protection like guardrails or scaffolding to maintain a secure working perimeter.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🪂</div>
                        <h4>3. Mitigation</h4>
                        <p>Using personal fall protection equipment to minimize risks during elevated tasks.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🆘</div>
                        <h4>4. Emergency Planning</h4>
                        <p>An essential consideration for elevated work—planning for prompt recovery and assistance procedures.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Physics of Movement: Impact & Suspension Awareness</h2>
            <p>A central component of obtaining your **Operator Proficiency Verification** is understanding the physical forces involved in elevated work. Recognizing momentum and deceleration mechanics highlights the importance of proper equipment usage.</p>

            <p>Furthermore, this **Safe Operation Curriculum** covers the physiological aspects of equipment suspension. Understanding harness positioning and circulation support principles is vital for comprehensive safety awareness. Our **Digital Safety Instruction Online** ensures workers understand proper relief equipment and assistance coordination.</p>
        </article>

        <article class="mh-container-content">
            <h2>Essential Equipment & Inspection Protocols</h2>
            <p>To maintain your **Operator Proficiency Verification**, workers must be competent in the pre-use inspection of their gear. This includes understanding the fundamentals of secure anchorage, body support, and connecting devices.</p>

            <ul class="mh-feature-list">
                <li><strong>Ladders:</strong> Designated for appropriate low-risk, short-duration tasks.</li>
                <li><strong>Fragile Surfaces:</strong> Recognizing and exercising caution around delicate roofing materials.</li>
                <li><strong>Edge Protection:</strong> Maintaining awareness of guardrails and secure perimeter barriers.</li>
                <li><strong>Anchor Points:</strong> Ensuring attachment points meet verified load-bearing ratings.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Streamlining Safety with Digital Certification</h2>
            <p>For contractors and facilities managers, the administrative side of team education can present scheduling challenges. Our **Operator Proficiency Verification** solves this by providing a centralized dashboard for managing employee records. No more lost paperwork; our system helps you track professional readiness seamlessly.</p>

            <p>Our **Safe Operation Curriculum** is designed for the modern professional. You can pause modules, resume on mobile devices, and access your **Digital Safety Instruction Online** verification document immediately upon completion. Join the professionals who have chosen an efficient path to readiness.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Get Certified Now — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection