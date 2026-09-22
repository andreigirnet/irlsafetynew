@extends('front.app')

@section('content')

    <div class="ct-page-wrapper">
        <div class="ct-hero-banner">
            <h1 class="ct-hero-title" x-text="data.contact">Contact Us</h1>
        </div>

        <div class="ct-container">
            <div class="ct-contact-card">

                <div class="ct-chat-options">

                    <div class="ct-chat-item">
                        <p class="ct-instruction-text">
                            Click the live chat icon available in the bottom right corner whenever you need help; we're online ➤
                        </p>
                        <img class="ct-icon-pulse" src="{{asset('images/logo/replay.png')}}" alt="Live Chat">
                    </div>
                </div>

                <div class="ct-divider"></div>

                <div class="ct-info-grid">
                    <div class="ct-detail-text">
                        <strong>Operating Hours:</strong><br>
                        Monday to Friday: 10am – 7pm<br>
                        Weekends & Bank Holidays: 10am – 7pm
                    </div>

                    <div class="ct-detail-text">
                        <strong>Email Us:</strong><br>
                        <a href="mailto:info@ireland-safetycourse.com" style="color: #2563eb; text-decoration: none;">info@ireland-safetycourse.com</a>
                    </div>

                    <div class="ct-detail-text">
                        <strong>Call Us:</strong><br>
                        <p style="color: #2563eb; text-decoration: none;">+353899735295</p>
                    </div>

                    <div class="ct-address-box">
                        84A Church Street, Dunstable, United Kingdom, LU5 4HP
                    </div>

                    <div class="ct-detail-text" style="grid-column: 1 / -1; margin-top: 15px; border-top: 1px solid #e5e7eb; padding-top: 15px;">
                        <!-- <strong>Company Name:</strong>  -->
                        This website is owned and operated by Andrei Girnet(Sole Trader)<br>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
