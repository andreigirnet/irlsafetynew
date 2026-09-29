@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">National Standards Hub</span>
                    <h1>Manual Handling <br>Course Online Ireland</h1>
                    <p class="mh-lead-text">
                        The ultimate **Safe Operation Curriculum** for the Irish workforce.
                        Secure your **Operator Proficiency Verification** with our modern standards-aligned framework. Professional mastery of safe lifting and injury prevention.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Manual Handling — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Team Packages</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Manual Handling Background: Safe Movement Practices</h2>
            <p>In the Republic of Ireland, proper handling and movement techniques are important priorities across the workforce. Organizations generally ensure that employees involved in transporting, supporting, or moving loads receive appropriate orientation and instruction.</p>

            <p>This **Safe Operation Curriculum** provides structured guidance for anyone involved in physical tasks. Through our **Digital Safety Instruction Online**, your team builds essential knowledge to minimize strain, support physical well-being, and maintain high standards of workplace ergonomics.</p>

            <div class="mh-feature-list">
                <li><strong>Preparedness Shield:</strong> Built around industry ergonomic and safe movement standards.</li>
                <li><strong>Audit Ready:</strong> Every **Operator Proficiency Verification** features a unique verification ID for your records.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 8 Pillars of Safe Manual Handling</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">👣</div>
                        <h4>1. Base of Support</h4>
                        <p>Maintaining a stable, hip-width stance with one foot slightly forward for balance.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧘</div>
                        <h4>2. Neutral Spine</h4>
                        <p>Keeping the back's natural S-curve to ensure even distribution of weight.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🦵</div>
                        <h4>3. Leg Strength</h4>
                        <p>Utilizing the body's strongest muscles—the glutes and quads—to power movement.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📦</div>
                        <h4>4. Load Closeness</h4>
                        <p>Keeping the load tight to the body to reduce leverage strain on the back.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Physics of Movement: Biomechanics</h2>
            <p>A central component of this **Safe Operation Curriculum** is understanding leverage principles. When bending at the waist incorrectly, lower back stress multiplies significantly. Proper posture and lifting mechanics protect the spine during daily tasks.</p>

            <p>Our **Digital Safety Instruction Online** provides a detailed look at spinal mechanics and lifting awareness. Maintaining a neutral spine and avoiding twisting while handling loads are critical skills for achieving total **Operator Proficiency Verification** for your staff.</p>

            <h3>Dynamic Risk Assessment: The TILE Method</h3>
            <p>Before any physical movement begins, we train staff to evaluate tasks using the TILE framework:</p>
            <ul class="mh-v8-list">
                <li><strong>Task:</strong> Does the movement involve twisting, stooping, or reaching?</li>
                <li><strong>Individual:</strong> Does the worker have appropriate physical capacity for the task?</li>
                <li><strong>Load:</strong> Is the object bulky, awkward, or unstable?</li>
                <li><strong>Environment:</strong> Are there slippery floors, poor lighting, or restrictive spaces?</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Ergonomics & Team Handling</h2>
            <p>Possessing an **Operator Proficiency Verification** means understanding when to utilize mechanical aids or team collaboration to maintain safe operations.</p>

            <ul class="mh-feature-list">
                <li><strong>Mechanical Aids:</strong> Identifying when trolleys or trucks are more efficient than manual carries.</li>
                <li><strong>Grip Mastery:</strong> Using secure hand placements rather than fingertips.</li>
                <li><strong>Path Planning:</strong> Ensuring transit routes are clear of obstructions before moving.</li>
                <li><strong>Height Optimization:</strong> Storing items at comfortable working heights to avoid strain.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Workplace Operator Proficiency Verification</h2>
            <p>For logistics firms and retail managers, coordinating team training efficiently is a priority. Our **Operator Proficiency Verification** removes the need for disruptive scheduling bottlenecks. Your team can complete their **Safe Operation Curriculum** at their own pace, ensuring they are well-prepared in just 45 minutes.</p>

            <p>With convenient access and digital delivery, our **Digital Safety Instruction Online** is an efficient path to professional readiness for modern businesses. Join the professionals who trust our platform for their educational credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection