<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- Title --}}
    <title>Online Safety Courses Ireland | Certified Training from €30 - {{ config('app.name') }}</title>
    
    {{-- Meta description --}}
    <meta name="description" content="€30 online safety courses in Ireland. Manual Handling, Fire Safety, First Aid & more. Get certificate. Fully compliant training.">
    <meta name="keywords" content="Manual Handling Courses Online, Fire Safety Training Ireland, First Aid Certification, Online Safety Courses, Workplace Safety">
    
    {{-- Open Graph / Canonical --}}
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en-ie" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en-gb" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">
    <meta name="format-detection" content="telephone=yes">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Online Safety Courses Ireland | Certified - {{ config('app.name') }}">
    <meta property="og:description" content="Complete your certified safety training online. Manual Handling, Fire Safety, First Aid & more. Instant certificate included.">
    <meta property="og:image:alt" content="Ireland Safety Course - Certified Online Training">
    <meta property="og:image" content="https://www.irelandsafetycourse.com/images/metaImage.png">
    
    {{-- Favicons --}}
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    {{-- Fonts & Stylesheets --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/registerInclude.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/brandSwiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/teamTraining.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/consulting.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/working-at-heights.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/adminProduct.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    {{-- Scripts --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <meta name="google-site-verification" content="LzejX2Dd-6oj32ZQRq5981tz74cTlalGjMXEwe6ZeiI"/>
</head>

<body>

{{-- Google tag (gtag.js) --}}
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-18160580545"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-18160580545');
</script>

@include("frontIncludes/frontNav")

@yield('content')

<script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=FCKWCyQL7PYg"></script>

@include("frontIncludes/registerInclude")
@include("frontIncludes/footer")
@include("frontIncludes/brandSwiper")

{{-- Footer Scripts --}}
<!-- <script src="{{ asset('js/hamburgerAction.js') }}"></script>
<script src="{{ asset('js/brandSwiper.js') }}"></script> -->
<script src="{{ asset('js/accordion.js') }}"></script>
<script src="{{ asset('js/review.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="{{ asset('js/prevent.js') }}"></script>

{{-- FAQ Schema Markup --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How long the certificate is valid?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our certificate is proof that you have successfully completed the course with us and is valid for 3 years. You can check your manual handling certificate validity on our verification page."
      }
    },
    {
      "@type": "Question",
      "name": "Is the manual handling course theory + practice?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, after you purchase the course, you will be able to start it immediately and go through the theory slides. At the end, you will have to pass a theory test. After successfully passing the theory test, you will need to record a video of yourself lifting an object while following proper manual handling techniques and send it to us via WhatsApp for approval. Our instructor will review the video and, once approved, will issue your certificate."
      }
    },
    {
      "@type": "Question",
      "name": "Can I complete the courses fully online?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Online e-learning safety courses are applied for general theory-based subjects. For programs that require physical competencies, a blended learning model is typically used, allowing the theoretical portion to be completed online followed by a mandatory practical assessment to meet full compliance standards. After successfully passing the theory test, you will need to record a video of yourself lifting an object while following proper manual handling techniques and send it to us via WhatsApp for approval. Our instructor will review the video and, once approved, will issue your certificate."
      }
    },
    {
      "@type": "Question",
      "name": "How do I verify a safety certificate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, verification is simple. You can verify any certificate directly by visiting the certificate verification page on this website."
      }
    },
    {
      "@type": "Question",
      "name": "Who is issuing the certificate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The certificate is issued directly by our private company as proof of course completion. It verifies that you have successfully completed our comprehensive training modules and met all necessary safety guidelines."
      }
    },
    {
      "@type": "Question",
      "name": "Can I download my certificate later?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can login any time with your credentials. And download a new certificate in case you lost it."
      }
    },
    {
      "@type": "Question",
      "name": "Do I get a discount if I buy bulk for my team?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. You receive a discount when purchasing 10 or more courses. Please check the corporate training section on the website for pricing tiers and group booking details."
      }
    },
    {
      "@type": "Question",
      "name": "Can I retake the assessment if I fail?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. You can retake the assessment as many times as you need with unlimited attempts until you successfully pass the course."
      }
    },
    {
      "@type": "Question",
      "name": "Can safety training be performed from a mobile device?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Modern e-learning safety courses are fully responsive and optimized for smartphones and tablets, allowing employees to complete theoretical modules, read training materials, and take assessments directly from any mobile device. Additionally, the courses are fully available in 5 languages to accommodate diverse workforces."
      }
    },
    {
      "@type": "Question",
      "name": "What if my certificate is not accepted by employer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You will be fully refunded. Expect 5-10 business days for refund to take place."
      }
    }
  ]
}
</script>
</body>
</html>