@extends('front.app')
@section('content')

    <div class="fq-page-wrapper">
        <div class="fq-hero-banner">
            <h1 class="fq-page-title">Manual Handling Training in Ireland – Frequently Asked Questions</h1>
            <div class="fq-title-underline"></div>
        </div>

        <div class="fq-container">

            <!-- MANUAL HANDLING FAQ -->
            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/info.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">Manual Handling Course – Complete Guide</span>
                </div>

                <div class="fq-accordion-list">

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Top Questions About Our Online Training</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div class="fq-accordion-content" x-show="open" x-transition>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>Your Manual Handling Ireland certification is available for immediate download once you complete the last part of the course practical video test, and it is approved by our instrutor.</span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>After finishing the theory modules of your manual handling training online Ireland, you can send a video via whatsup, and our instructor will look over it.</span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>The total fee of €{{config('global.course_price')}} covers the full manual handling course Ireland, final assessment, and certification — no hidden charges.</span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>The course is available 24/7 online, allowing you to complete your manual handling training Ireland at your own pace.</span></div>
                            <div class="fq-major-item"><img src="{{asset('images/icons/right-arrow.png')}}" class="fq-bullet-icon"><span>The course is fully compatible with smartphones, tablets, laptops, and desktop computers.</span></div>
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Practical Skills Assessment</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Once you pass the theory exam, send a video to whatsup {{config('global.phone')}} with you lifting a object following manual handling techniques. Our instructor will asses it and in less than 10 minutes you get the certificate.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Is this course accepted in Ireland?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                        Our courses are designed to meet the <strong>Irish industry standards</strong>. We have got professionally trained instructors who are reviewing your practical skills.                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Certificate Access</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Your certificate will be emailed and stored in your account for easy access and printing — part of your Manual Handling Ireland certification.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Are there extra fees for the practical assessment?</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            No, the full fee covers theory, practical assessment, and manual handling certification Ireland.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Satisfaction Guarantee</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            We offer a 14-day refund policy if the course is not suitable for you, provided training has not been completed and the certificate not issued.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open = !open">
                            <span class="fq-question-text">Managing training for a team</span>
                            <svg class="fq-icon-chevron" :class="open ? 'fq-rotate' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            After you login, in your employer section, you will be able to manage your team. Add employees, assign courses, and view progress.
                        </div>
                    </div>

                </div>
            </div>

            <!-- ABOUT COURSES -->
            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/info.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">About Our Manual Handling Training</span>
                </div>

                <div class="fq-accordion-list">

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Which devices can I use?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Any modern device with internet access can be used to complete your manual handling training online Ireland.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Are the instructors qualified?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, all instructors hold QQI Level 6 Manual Handling Instructor certification and deliver training in line with work compliant standards.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Can I review the material after completing the course?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, you will continue to have access to your manual handling training Ireland materials and Manual Handling Ireland certification.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Is there a time limit to complete the course?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            No, you can complete your manual handling course Ireland at your own pace. Progress is saved automatically.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Can I take the course from outside Ireland?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, the manual handling training online Ireland is accessible globally, while meeting job compliant standards.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Do you offer group discounts?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, a 10% discount is applied when purchasing 10 or more manual handling course Ireland licenses.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open: false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">What languages are available?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            The content is available in multiple languages. 
                        </div>
                    </div>

                </div>
            </div>

            <!-- ENROLLMENT & PAYMENTS -->
            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/carts.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">Enrollment & Payments</span>
                </div>

                <div class="fq-accordion-list">

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">How do I start?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Create an account or login, then complete the purchase, after you will be able to start the course in the courses section.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Buying for staff members?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Add multiple courses to your cart and assign courses to employees. Discounts apply for larger orders.
                            Follow this tutorial for clarification where it is shown step by step. <a href="https://www.youtube.com/watch?v=6QkYshqqdIo">Click Here</a>
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Payment options</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            We accept all major debit and credit cards. Businesses may request an invoice for bank transfer payments.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Bulk discounts</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Automatic discounts apply for larger orders to support company-wide manual handling training Ireland goals.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Can I purchase the course for someone else?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, you can send the course to anyone in the <strong>Employers section</strong>. Add him as employee. After that in courses section you can send him the course.
                            Follow this tutorial for clarification where it is shown step by step. <a href="https://www.youtube.com/watch?v=6QkYshqqdIo">Click Here</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ACCOUNT ACCESS -->
            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/login.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">Account Access</span>
                </div>

                <div class="fq-accordion-list">

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">I completed payment – what happens next?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Spot inside the navbar the <strong>My courses section</strong>, click it. There you will be able to start your course immediately.
                            Follow this tutorial if you still have questions. <a href="https://www.youtube.com/watch?v=pvU81g1_IJM">Click Here</a>
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Forgot password?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Click “Forgot Password” on login, enter your email, and follow the link to reset access.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">How do I download my certificate?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                        After successfully passing the assessment, your Manual Handling Ireland Certificate will be available in your dashboard for download or printing. The certificate serves as proof of your successful course completion and the manual handling skills you have acquired through our training.
                        </div>
                    </div>

                </div>
            </div>

            <!-- EXAMS & CERTIFICATION -->
            <div class="fq-category-card">
                <div class="fq-category-header">
                    <img src="{{asset('images/icons/certificate.png')}}" class="fq-category-icon">
                    <span class="fq-category-title">Exams & Certification</span>
                </div>

                <div class="fq-accordion-list">

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Do I get a certificate after completion?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, you will receive a certificate. The certificate serves as proof of your successful course completion and the manual handling skills you have acquired through our training.
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">Is the exam online?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Yes, the theory and practical exam is fully online. For theory you have a quiz at the end of the module. For practical test you have to send a video to whatsup {{config('global.phone')}} with you lifting a object following manual handling techniques. Our instructor will asses it and in less than 10 minutes you get the certificate. 
                        </div>
                    </div>

                    <div class="fq-accordion-item" x-data="{ open:false }">
                        <button class="fq-accordion-trigger" @click="open=!open">
                            <span class="fq-question-text">How long is the certification valid?</span>
                            <svg class="fq-icon-chevron" :class="open?'fq-rotate':''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="fq-accordion-content" x-show="open" x-transition>
                            Your Certificate is valid for 3 years from the date of issue.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
