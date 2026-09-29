@extends('front.app')
@section('content')
    <div id="mainBanner">
{{--        <img src="{{asset('images/banners/BackgroundIreland.png')}}" class="warehouse" alt="">--}}
{{--        <video autoplay muted loop class="warehouse" >--}}
{{--            <source src="video/bannerVideoBig.mp4" type="video/mp4">--}}
{{--        </video>--}}
        <div class="opacityLayer"></div>
        <div class="mainBannerContent">
            <div class="mainBannerRight">
                <h1 class="mainBannerTitle">IRELAND SAFETY COURSE -<br> WORKPLACE SAFETY COURSES ONLINE</h1>
                <div class="trust-badges-column">

                    <div class="trust-badge">
                        <div class="badge-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="badge-content">
                            <span class="badge-number">4.9 / 5</span>
                            <span class="badge-label">Satisfied Customers</span>
                        </div>
                    </div>

                    <div class="trust-badge">
                        <div class="badge-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        </div>
                        <div class="badge-content">
                            <span class="badge-number">Completion</span>
                            <span class="badge-label">Digital Certificates</span>
                        </div>
                    </div>

                    <div class="trust-badge">
                        <div class="badge-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div class="badge-content">
                            <span class="badge-number">24/7</span>
                            <span class="badge-label">Learn at Your Pace</span>
                        </div>
                    </div>
                </div>
                <div class="mainBannerDescription">Online workplace safety courses and training. Our courses are clear, practical, and easy to follow with images, and concise text. Complete your training at your own pace on any device and receive your completion record.</div>
                    <a href="{{route('register')}}" class="modern-glow-btn">
                    START NOW
                    </a>
            </div>
        </div>
        <div class="metrics-wrapper bg-brand-deep">
            <div class="metrics-grid">

                <div class="metric-card">
                    <span class="metric-value">100%</span>
                    <span class="metric-caption">ONLINE LEARNING</span>
                </div>

                <div class="metric-card">
                    <span class="metric-value">€{{config('global.course_price')}}</span>
                    <span class="metric-caption">Course & certificate</span>
                </div>

                {{--            <div class="metric-card">--}}
                {{--                <span class="metric-value">30</span></span>--}}
                {{--                <span class="metric-caption">Minutes Course</span>--}}
                {{--            </div>--}}

                <div class="metric-card">
                    <span class="metric-value">24/7</span>
                    <span class="metric-caption">Train at your own pace</span>
                </div>

            </div>
        </div>
    </div>


    <div class="title" data-aos="fade-up">
        <div class="titleText" >Workplace safety courses</div>
        <div class="borderTitle"></div>
    </div>
    <div class="productSection" id="courses">
        <div class="productWrapper" >
            <div class="adminProducts">
                @foreach($products as $product)
                    @if($product->status == 0)
                        <div class="hero-course-card">
                            @if($product->id == 1)
                                <div class="card-badge orange-badge">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M23 7l-7 5 7 5V7z"></path><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                    Theory + Practical Included
                                </div>
                            @else
                                <div class="card-badge green-badge">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                    Online Certificate
                                </div>
                            @endif

                            <div class="card-image-container">
                                <img src="{{asset('images/productAdd/'.$product->image)}}" alt="{{$product->name}}" class="hero-course-img">
                                <div class="image-gradient-overlay"></div>
                                <div class="floating-price-tag">
                                    <span class="currency">€</span>{{$product->price}}
                                </div>
                            </div>

                            <div class="card-content-area">
                                <h3 class="hero-title">{{$product->name}}</h3>

                                <div class="specs-grid">
                                    <div class="spec-card">
                                        <div class="spec-icon">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                        </div>
                                        <div class="spec-data">
                                            <span class="spec-label">Duration</span>
                                            <span class="spec-value">@if($product->id == 14) {{$product->durationTraining}} Day @else {{$product->durationTraining}} Mins @endif + instructor review</span>
                                        </div>
                                    </div>

                                    <div class="spec-card">
                                        <div class="spec-icon">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                        </div>
                                        <div class="spec-data">
                                            <span class="spec-label">Validity</span>
                                            <span class="spec-value">{{$product->certificateValidity}} Years</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="benefits-row">
                                    <span class="benefit-item">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                        Course Certification
                                    </span>
                                                            <span class="benefit-item">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                        Unlimited test attempts
                                    </span>
                                </div>

                                @if($product->status == 0)
                                    <div class="card-action-buttons">
                                        @if($product->description)
                                            <a href="{{route('front.product', $product->slug)}}" class="btn-secondary-info">
                                                Course Info
                                            </a>
                                        @endif
                                        <a href="{{route('register')}}" class="btn-primary-enroll">
                                            <span>Start Now</span>
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="langTitle" data-aos="fade-up">
        <div class="languageText">
            At Ireland Safety Course, our Workplace safety courses and online Workplace safety training programs are designed to be simple, engaging, and accessible for learners of all nationalities. Each safety course online includes clear illustrative graphics, straightforward images, and easy-to-read content to ensure every step is simple to follow. Our Workplace safety courses focus on quality and essential workplace safety best practices. Discover our safety courses online and begin your Workplace safety training today.
        </div>
        <div class="languagesSection">
            <img src="{{asset('images/flags/en.png')}}" alt="">
            <img src="{{asset('images/flags/pl.png')}}" alt="">
            <img src="{{asset('images/flags/ro.png')}}" alt="">
            <img src="{{asset('images/flags/ru.png')}}" alt="">
            <img src="{{asset('images/flags/sp.png')}}" alt="">
            <img src="{{asset('images/flags/ukr.png')}}" alt="">
        </div>
    </div>

    <section class="premium-bulk-wrapper">
        <div class="premium-bulk-container">

            <div class="premium-info-wing">
                <header class="premium-info-header">
                    <h2 class="premium-main-title" >
                        How Our Workplace Safety Courses Work: 4 Easy Steps
                    </h2>
                    <div class="premium-divider"></div>
                </header>

                <div class="premium-step-list">

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/22.png')}}" alt="Activate">
                        </div>
                        <p class="premium-step-text" >Create or Login in your account to buy the courses you need</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/11.png')}}" alt="Purchase">
                        </div>
                        <p class="premium-step-text" >Complete the payment and go to your courses section to start the course</p>
                    </div>



                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/33.png')}}" alt="Achieve">
                        </div>
                        <p class="premium-step-text" >Learn & Achieve - Progress through the course, pass the assessment, and download your certificate.</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/44.png')}}" alt="Support">
                        </div>
                        <p class="premium-step-text" >For technical support, please contact us at info@ireland-safetycourse.com.</p>
                    </div>
                </div>
            </div>

            <div class="premium-visual-wing">
                <img src="{{asset('images/landingBulk.webp')}}" class="premium-promo-img" alt="Bulk Purchase Offer">
            </div>

        </div>
    </section>



    <div class="cpdContainer">
        <div class="cpdInner">
            <div class="paddingCpd">
                <h2 class="cpdTitle" >Get Your Workplace Safety Certificate Today</h2>
                <div class="cpdFlex">
                    <div class="cpdLeft">
                        <div class="cpdItems">
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/1.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Complete this compliant course </div>
                                    <div class="cpdItemContent"  >Professional Course to obtain your Certificate!</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/2.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Certify Your Skills</div>
                                    <div class="cpdItemContent"  >An Ireland Safety Course Diploma/Certificate, validates the skills you have acquired.</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/3.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Stand Out From the Crowd</div>
                                    <div class="cpdItemContent"  >Include your Ireland Safety Course Certification on your resume to outshine competitors.</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/4.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Advance in Your Career</div>
                                    <div class="cpdItemContent"  >Showcase your Ireland Safety Course Certification to prospective employers, highlighting your skills and capabilities.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cpdRight">
                        <img src="{{asset('images/certExample.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="title" data-aos="fade-up" style="margin-bottom: 25px;">
{{--        <div class="titleText sizeTextMobile" >What Our Customers Say</div>--}}
        <div class="borderTitle"></div>
    </div>

    {{--    <div id="customersReviews">--}}
    {{--        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>--}}
    {{--        <div class="elfsight-app-452ee68c-8e4c-4329-bf9d-d5f4175f5d0e"></div>--}}
    {{--    </div>--}}
    {{--    <div id="customerReviewsMob">--}}
    {{--        <div class="customerReviewsMobWrap">--}}
    {{--            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>--}}
    {{--            <div class="elfsight-app-6a3ccd9b-896b-4195-946e-7cba27a27218"></div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

{{--    <div id="customersReviews">--}}
{{--        <div id="customerReviewWrap">--}}

{{--            <div class="premium-review-card" data-aos="fade-up">--}}
{{--                <div class="premium-review-top">--}}
{{--                    <div class="premium-review-header">--}}
{{--                        <div class="premium-avatar-container">--}}
{{--                            <img src="{{asset('images/avatars/av-1.png')}}" alt="John Weasley">--}}
{{--                        </div>--}}
{{--                        <div class="premium-reviewer-identity">--}}
{{--                            <div class="premium-name-row">--}}
{{--                                <span class="premium-reviewer-name">John Weasley</span>--}}
{{--                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>--}}
{{--                            </div>--}}
{{--                            <div class="premium-rating-line">--}}
{{--                                <div class="premium-stars-group">--}}
{{--                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">--}}
{{--                                </div>--}}
{{--                                <span class="premium-timestamp">24 minutes ago</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="premium-review-body">--}}
{{--                        "The online Workplace Safety Course Online provided by ireland-safetycourse was comprehensive yet easy to follow. The certification process was smooth, and the practical tips were immensely helpful."--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="premium-review-footer">--}}
{{--                    <span class="premium-posted-label">Verified Review</span>--}}
{{--                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="100">--}}
{{--                <div class="premium-review-top">--}}
{{--                    <div class="premium-review-header">--}}
{{--                        <div class="premium-avatar-container">--}}
{{--                            <img src="{{asset('images/avatars/av-2.png')}}" alt="Mary Andrews">--}}
{{--                        </div>--}}
{{--                        <div class="premium-reviewer-identity">--}}
{{--                            <div class="premium-name-row">--}}
{{--                                <span class="premium-reviewer-name">Mary Andrews</span>--}}
{{--                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>--}}
{{--                            </div>--}}
{{--                            <div class="premium-rating-line">--}}
{{--                                <div class="premium-stars-group">--}}
{{--                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">--}}
{{--                                </div>--}}
{{--                                <span class="premium-timestamp">2 hours ago</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="premium-review-body">--}}
{{--                        "I found the course from Ireland Safety Course to be informative and well-structured. The convenience of online learning coupled with their engaging content made the whole experience worthwhile."--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="premium-review-footer">--}}
{{--                    <span class="premium-posted-label">Verified Review</span>--}}
{{--                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="200">--}}
{{--                <div class="premium-review-top">--}}
{{--                    <div class="premium-review-header">--}}
{{--                        <div class="premium-avatar-container">--}}
{{--                            <img src="{{asset('images/avatars/av-3.png')}}" alt="Choe Lee">--}}
{{--                        </div>--}}
{{--                        <div class="premium-reviewer-identity">--}}
{{--                            <div class="premium-name-row">--}}
{{--                                <span class="premium-reviewer-name">Choe Lee</span>--}}
{{--                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>--}}
{{--                            </div>--}}
{{--                            <div class="premium-rating-line">--}}
{{--                                <div class="premium-stars-group">--}}
{{--                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">--}}
{{--                                </div>--}}
{{--                                <span class="premium-timestamp">7 hours ago</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="premium-review-body">--}}
{{--                        "The Workplace Safety Course Online exceeded my expectations. The modules were clear and concise, and the quizzes helped reinforce key concepts. Highly recommended for anyone seeking certification!"--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="premium-review-footer">--}}
{{--                    <span class="premium-posted-label">Verified Review</span>--}}
{{--                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="300">--}}
{{--                <div class="premium-review-top">--}}
{{--                    <div class="premium-review-header">--}}
{{--                        <div class="premium-avatar-container">--}}
{{--                            <img src="{{asset('images/avatars/av-4.png')}}" alt="Markus Low">--}}
{{--                        </div>--}}
{{--                        <div class="premium-reviewer-identity">--}}
{{--                            <div class="premium-name-row">--}}
{{--                                <span class="premium-reviewer-name">Markus Low</span>--}}
{{--                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>--}}
{{--                            </div>--}}
{{--                            <div class="premium-rating-line">--}}
{{--                                <div class="premium-stars-group">--}}
{{--                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">--}}
{{--                                </div>--}}
{{--                                <span class="premium-timestamp">10 hours ago</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="premium-review-body">--}}
{{--                        "I appreciated the flexibility of being able to complete the training at my own pace. The material was presented in a way that was easy to understand for our entire team."--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="premium-review-footer">--}}
{{--                    <span class="premium-posted-label">Verified Review</span>--}}
{{--                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="400">--}}
{{--                <div class="premium-review-top">--}}
{{--                    <div class="premium-review-header">--}}
{{--                        <div class="premium-avatar-container">--}}
{{--                            <img src="{{asset('images/avatars/av-5.png')}}" alt="Vanessa Spills">--}}
{{--                        </div>--}}
{{--                        <div class="premium-reviewer-identity">--}}
{{--                            <div class="premium-name-row">--}}
{{--                                <span class="premium-reviewer-name">Vanessa Spills</span>--}}
{{--                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>--}}
{{--                            </div>--}}
{{--                            <div class="premium-rating-line">--}}
{{--                                <div class="premium-stars-group">--}}
{{--                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">--}}
{{--                                </div>--}}
{{--                                <span class="premium-timestamp">15 hours ago</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="premium-review-body">--}}
{{--                        "Obtaining my Manual Handling certificate was a breeze. The course content was relevant and the assessments were fair. Very pleased with the overall experience."--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="premium-review-footer">--}}
{{--                    <span class="premium-posted-label">Verified Review</span>--}}
{{--                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="100">--}}
{{--                <div class="premium-review-top">--}}
{{--                    <div class="premium-review-header">--}}
{{--                        <div class="premium-avatar-container">--}}
{{--                            <img src="{{asset('images/avatars/av-6.png')}}" alt="Angela Jedrynska">--}}
{{--                        </div>--}}
{{--                        <div class="premium-reviewer-identity">--}}
{{--                            <div class="premium-name-row">--}}
{{--                                <span class="premium-reviewer-name">Angela Jedrynska</span>--}}
{{--                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>--}}
{{--                            </div>--}}
{{--                            <div class="premium-rating-line">--}}
{{--                                <div class="premium-stars-group">--}}
{{--                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">--}}
{{--                                </div>--}}
{{--                                <span class="premium-timestamp">1 day ago</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="premium-review-body">--}}
{{--                        "The online platform made it convenient for me to access the training from anywhere. The practical demonstrations were beneficial and highly professional."--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="premium-review-footer">--}}
{{--                    <span class="premium-posted-label">Verified Review</span>--}}
{{--                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}


    {{--    <div class="title" data-aos="fade-up">--}}
    {{--        <div class="titleText sizeTextMobile" >About Us</div>--}}
    {{--        <div class="borderTitle"></div>--}}
    {{--    </div>--}}

    <section class="imh-about-section" data-aos="fade-up">
        <div class="imh-container">
            <div class="imh-header">
                <span class="imh-subtitle">Excellence in Safety</span>
                <h2 class="imh-title">Safety Courses Online: Study Anytime, Anywhere With Ireland Safety Course</h2>
                <div class="imh-divider"></div>
            </div>

            <div class="imh-content-grid">
                <div class="imh-main-text">
                    <p class="imh-lead-para" >
                        Welcome to IrelandSafety-Course.com, your premier destination for top-notch online Workplace Safety Course Online in Ireland...
                    </p>
                    <p class="imh-body-para" >
                        At Ireland Safety Course, we take immense pride in the integrity and excellence of our safety training services...
                    </p>

                    <div class="imh-contact-box">
                        <p >For inquiries, student support, sales, or technical assistance, reach out via chat or email.</p>
                        <a href="mailto:info@ireland-safetycourse.com" class="imh-email-link">info@ireland-safetycourse.com</a>
                    </div>
                </div>

                <div class="imh-trust-card">
                    <div class="imh-badge-item">
                        <div class="imh-icon">🌍</div>
                        <div>
                            <strong>Learn from anywhere</strong>
                            <p>24/7</p>
                        </div>
                    </div>
                    <div class="imh-badge-item">
                        <div class="imh-icon">🎓</div>
                        <div>
                            <strong>Professional instructors</strong>
                            <p>QQI Level 6 Instructors</p>
                        </div>
                    </div>
                    <div class="imh-badge-item">
                        <div class="imh-icon">🛡️</div>
                        <div>
                            <strong>100% Digital</strong>
                            <p>Secure, efficient, and accessible anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="title">
        <div class="titleText sizeTextMobile" >Get your Certificate</div>
        <div class="borderTitle"></div>
        <a href="{{route('register')}}"><div class="pulse-button" data-aos="fade-up">Pay / Register Here</div></a>
    </div>

    <section class="exclusive-benefits-area">
        <div class="exclusive-benefits-grid">

            <div class="exclusive-col" data-aos="fade-up">
                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #e60b31;">
                        <img src="{{asset('images/logo/home.svg')}}" alt="Home">
                    </div>
                    <h3 class="exclusive-title" >FLEXIBLE WORKPLACE SAFETY COURSE</h3>
                    <p class="exclusive-text" >Complete your training online at a time and location that fits your lifestyle.</p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #c3d600;">
                        <img src="{{asset('images/logo/clock.svg')}}" alt="Clock">
                    </div>
                    <h3 class="exclusive-title" >SAVE TIME WITH VIRTUAL LEARNING</h3>
                    <p class="exclusive-text" >Avoid travel time and the wait for physical classes to begin.</p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #345cb3;">
                        <img src="{{asset('images/logo/wallet.svg')}}" alt="Wallet">
                    </div>
                    <h3 class="exclusive-title" >AFFORDABLE WORKPLACE SAFETY COURSE ONLINE</h3>
                    <p class="exclusive-text" >Online education removes the overhead expenses of traditional classroom settings.</p>
                </div>
            </div>

            <div class="exclusive-hero-center" data-aos="zoom-in">
                <img src="{{asset('images/indian.png')}}" class="indianimage" alt="Workplace Safety Training">
            </div>

            <div class="exclusive-col" data-aos="fade-up" data-aos-delay="100">
                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #f49c12;">
                        <img src="{{asset('images/logo/download.svg')}}" alt="Download">
                    </div>
                    <h3 class="exclusive-title" > WORKPLACE SAFETY CERTIFICATE</h3>
                    <p class="exclusive-text" >Finish your modules and download your certificate immediately upon completion.</p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #356ce6;">
                        <img src="{{asset('images/logo/internet.svg')}}" alt="Global">
                    </div>
                    <h3 class="exclusive-title" >MAXIMIZE EFFICIENCY</h3>
                    <p class="exclusive-text" >Skip the commute and work through your Workplace safety course at the speed that is right for you.</p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #f91819;">
                        <img src="{{asset('images/logo/high-quality.svg')}}" alt="Quality">
                    </div>
                    <h3 class="exclusive-title" >RECOGNISED QUALIFICATIONS</h3>
                    <p class="exclusive-text" >Our digital learning is a cost-effective alternative to earn your Workplace safety certificate.</p>
                </div>
            </div>

        </div>
    </section>

    <div class="title spaceTop" data-aos="fade-up" >
        <div class="titleText sizeTextMobile" >Expert Online Workplace Safety Course Online | ireland-safetycourse.com</div>
        <div class="borderTitle"></div>
    </div>

    <section class="imh-expert-section" data-aos="fade-up">
        <div class="imh-expert-container">

            <div class="imh-expert-main-grid">
                <div class="imh-expert-narrative">
                    <p >At ireland-safetycourse.com, we understand the critical importance...</p>

                    <div class="imh-expert-cta-card">
                        <h3 >Elevate your workplace safety standards...</h3>
                        <a href="mailto:info@ireland-safetycourse.com" class="imh-expert-btn">Email Us Today</a>
                    </div>
                </div>

                <div class="imh-expert-features">
                    <h4 class="imh-feature-heading" >Why Choose ireland-safetycourse.com?</h4>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">📋</span>
                        <div>
                            <strong>Modern Curriculum</strong>
                            <p>Latest industry standards and best practices.</p>
                        </div>
                    </div>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">💻</span>
                        <div>
                            <strong>Interactive Learning</strong>
                            <p>Engaging modules that make safety training effective.</p>
                        </div>
                    </div>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">🏅</span>
                        <div>
                            <strong>Online Certificate</strong>
                            <p>Showcase compliance with safety.</p>
                        </div>
                    </div>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">🕒</span>
                        <div>
                            <strong>24/7 Access</strong>
                            <p>Learn at your own pace, anytime, anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="imh-expert-footer">
                <p >Ensure your team's safety and efficiency—choose ireland-safetycourse.com today!</p>
            </div>
        </div>
    </section>
    <section class="mh-faq" x-data="{ search: '' }">
        <div class="mh-faq-wrapper">

            <header class="mh-faq-header">
                <span class="mh-faq-badge">Faqs</span>
                <h2 class="mh-faq-title">Workplace Safety: FAQs</h2>
            </header>

            <div class="mh-faq-list">

                <!-- FAQ 1 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'is Workplace safety training a requirement in ireland? '.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">How long the certificate is valid?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-cloak>
                        <p class="mh-faq-text">
                            <strong>Our certificate</strong> is proof that you have successfully completed the course with us and is valid for 3 years. You can check your manual handling certificate validity here: <a href="{{route('front.verify')}}">verify certificate</a>
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'how long does a Workplace safety certificate last? expiry'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Is the manual handling course theory + practice?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-cloak>
                        <p class="mh-faq-text">
                            Yes, after you purchase the course, you will be able to <strong>start it immediately</strong> and go through the theory slides. At the end, you will have to pass a theory test. After successfully passing the theory test, you will need to record a video of yourself lifting an object while following <strong>proper manual handling techniques</strong> and send it to us via WhatsApp for approval. Our instructor will review the video and, once approved, will issue your certificate.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'how are online safety courses utilized in compliance frameworks?'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Can I complete the courses fully online?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-cloak>
                        <p class="mh-faq-text">
                            Online e-learning safety courses are applied for general theory-based subjects. For programs that require physical competencies, a <strong>online learning</strong> model is typically used, allowing the theoretical portion to be completed online followed by a mandatory practical assessment to meet full compliance standards.After successfully passing the theory test, you will need to record a video of yourself lifting an object while following <strong>proper manual handling techniques</strong> and send it to us via WhatsApp for approval. Our instructor will review the video and, once approved, will issue your certificate.
                        </p>
                    </div>
                </div>

                <div class="mh-faq-item" x-data="{ open: false }" x-show="'how do i verify a certificate validation check'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">How do I verify a safety certificate?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"  x-cloak>
                        <p class="mh-faq-text">
                            <strong>Yes, verification is simple.</strong> You can verify any certificate directly by visiting the <a href="{{ route('front.verify') }}">certificate verification page</a> on this website.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'who is responsible for paying for the training? employer duties'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Who is issuing the certificate?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-cloak>
                        <p class="mh-faq-text">
                            The certificate is issued by PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED (trading as Manual Handling Ireland) after you successfully submit the practical video assessment via WhatsApp on +353899735295. Once our instructor has reviewed and approved the video, your certificate will be issued.
                        </p>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'what happens if a business is not compliant? fines'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Can I download my certificate later?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-cloak>
                        <p class="mh-faq-text">
                            You can login any time with your credentials. And download a <strong>new certificate</strong> in case you lost it
                        </p>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'do i get a discount if i buy bulk for my team corporate training'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Do I get a discount if I buy bulk for my team?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"  x-cloak>
                        <p class="mh-faq-text">
                            <strong>Yes.</strong> You receive a discount when purchasing 10 or more courses. Please check the corporate training section on the website for pricing tiers and group booking details.
                        </p>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'can i retake assessment attempts exam test'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Can I retake the assessment if I fail?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open"  x-cloak>
                        <p class="mh-faq-text">
                            <strong>Yes.</strong> You can retake the assessment as many times as you need with unlimited attempts until you successfully pass the course. If your practical assessment is not approved, our instructor will provide feedback explaining what needs to be improved. You can then send a new video to whatsup addressing the feedback for another review, at no additional cost.
                        </p>
                    </div>
                </div>

                <!-- FAQ 9 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'can training be performed from mobile device mobile friendly smartphone languages'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">Can safety training be performed from a mobile device?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-cloak>
                        <p class="mh-faq-text">
                            <strong>Yes.</strong> Modern e-learning safety courses are fully responsive and optimized for smartphones and tablets, allowing employees to complete theoretical modules, read training materials, and take assessments directly from any mobile device. Additionally, the courses are fully available in <strong>5 languages</strong> to accommodate diverse workforces.
                        </p>
                    </div>
                </div>

                <!-- FAQ 10 -->
                <div class="mh-faq-item" x-data="{ open: false }" x-show="'mental health wellbeing workplace safety psychosocial'.includes(search.toLowerCase())">
                    <button class="mh-faq-trigger" @click="open = !open">
                        <span class="mh-faq-question">What if my certificate is not accepted by employer?</span>
                        <div class="mh-faq-plus" :style="open ? 'transform: rotate(45deg);' : ''"></div>
                    </button>
                    <div class="mh-faq-content" x-show="open" x-cloak>
                        <p class="mh-faq-text">
                            You will be <strong>fully refunded</strong>. Contact us in the live chat or email, your request will be reviewed up to 14 days and Expect 5-10 business days for money to arrive. For more details read <a href="{{route('front.refund')}}">refund policy</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="{{asset("js/counter.js")}}"></script>
@endsection
