@extends('front.app')

@section('content')
    <style>
        .cookies-wrapper {
            background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);
            min-height: 100vh;
            padding: 4rem 1rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        .cookies-container {
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .cookies-header {
            background: #0f172a;
            color: #ffffff;
            padding: 3rem 2.5rem;
            position: relative;
        }
        .cookies-header h1 {
            font-size: 2.25rem;
            font-weight: 800;
            letter-spacing: -0.025em;
            margin: 0 0 0.5rem 0;
            line-height: 1.2;
        }
        .cookies-header p {
            color: #94a3b8;
            font-size: 0.95rem;
            margin: 0;
        }
        .cookies-body {
            padding: 2.5rem;
        }
        .cookies-section {
            margin-bottom: 2.5rem;
        }
        .cookies-section h3 {
            font-size: 1.35rem;
            font-weight: 700;
            color: #1e293b;
            margin-top: 0;
            margin-bottom: 1.25rem;
            line-height: 1.4;
            display: flex;
            align-items: center;
        }
        .cookies-section h3::before {
            content: "";
            display: inline-block;
            width: 6px;
            height: 20px;
            background: #3b82f6;
            margin-right: 10px;
            border-radius: 3px;
        }
        .cookies-text {
            color: #475569;
            line-height: 1.7;
            font-size: 1.05rem;
            margin-bottom: 1.25rem;
        }
        
        /* Table Styling */
        .cookies-table-container {
            overflow-x: auto;
            margin-top: 1.5rem;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
        }
        .cookies-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
            color: #334155;
        }
        .cookies-table th {
            background: #f1f5f9;
            color: #0f172a;
            font-weight: 700;
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
        }
        .cookies-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
            vertical-align: top;
        }
        .cookies-table tr:last-child td {
            border-bottom: none;
        }
        .cookies-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .cookie-badge {
            display: inline-block;
            padding: 2px 8px;
            font-size: 0.75rem;
            font-weight: 600;
            border-radius: 4px;
            background: #e2e8f0;
            color: #475569;
        }
        .cookie-badge.necessary { background: #dbeafe; color: #1e40af; }
        .cookie-badge.functional { background: #fef3c7; color: #92400e; }
        .cookie-badge.analytics { background: #e0e7ff; color: #3730a3; }
        .cookie-badge.marketing { background: #fee2e2; color: #991b1b; }

        @media (max-width: 768px) {
            .cookies-wrapper {
                padding: 1.5rem 0.5rem;
            }
            .cookies-header {
                padding: 2rem 1.5rem;
            }
            .cookies-header h1 {
                font-size: 1.75rem;
            }
            .cookies-body {
                padding: 1.5rem;
            }
        }
    </style>

    <div class="cookies-wrapper" data-aos="fade-up">
        <div class="cookies-container">
            
            <div class="cookies-header">
                <h1>Cookie Policy</h1>
                <p>{{ config('global.business_name') }}</p>
            </div>

            <div class="cookies-body">

                <div class="cookies-section">
                    <h3>1. What Are Cookies?</h3>
                    <p class="cookies-text">
                        Cookies are small text files stored on your device when you visit a website. They help websites function correctly, maintain security, remember preferences, and understand how visitors interact with the platform.
                    </p>
                </div>

                <div class="cookies-section">
                    <h3>2. How We Use Cookies</h3>
                    <p class="cookies-text">
                        {{ config('global.business_name') }} uses cookies and similar technologies for essential website functionality, security, session management, and customer support.
                    </p>
                    <p class="cookies-text">
                        Our website may also utilize third-party services, including Google and Chatway, which may place cookies or similar technologies to provide analytics, communications, and interactive support services.
                    </p>
                </div>

                <div class="cookies-section">
                    <h3>3. Overview of Cookies Used</h3>
                    <p class="cookies-text">
                        The table below breaks down the specific cookies used on our platform, what they do, how long they stay on your device, and their category:
                    </p>
                    
                    <div class="cookies-table-container">
                        <table class="cookies-table">
                            <thead>
                                <tr>
                                    <th>Cookie Name</th>
                                    <th>Category</th>
                                    <th>Duration</th>
                                    <th>What it does (Plain English)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>__cf_bm</code>, <code>cf_clearance</code></td>
                                    <td><span class="cookie-badge necessary">Necessary</span></td>
                                    <td>30 mins – 1 year</td>
                                    <td>Protects the website from malicious bots and verifies that you are a real human visitor.</td>
                                </tr>
                                <tr>
                                    <td><code>jwt.token</code>, <code>XSRF-TOKEN</code>, <code>id</code>, <code>normal.handling.online.session</code></td>
                                    <td><span class="cookie-badge necessary">Necessary</span></td>
                                    <td>Session – 1 year</td>
                                    <td>Keeps you safely logged in and protects your account data from unauthorized cross-site tampering.</td>
                                </tr>
                                <tr>
                                    <td><code>chatway.delivery.url</code>, <code>chatway.referrer.url</code></td>
                                    <td><span class="cookie-badge functional">Functional</span></td>
                                    <td>Up to 1 year</td>
                                    <td>Remembers your live chat context and preferences so customer support can assist you better.</td>
                                </tr>
                                <tr>
                                    <td><code>NID</code>, <code>OTZ</code>, <code>AEC</code>, <code>SID</code>, <code>HSID</code>, <code>SSID</code></td>
                                    <td><span class="cookie-badge functional">Functional</span></td>
                                    <td>Session – 1.5 years</td>
                                    <td>Saved by Google services to remember your user preferences, help secure your session, and prevent fraud.</td>
                                </tr>
                                <tr>
                                    <td><code>_ga</code>, <code>_gid</code>, <code>_gcl_au</code></td>
                                    <td><span class="cookie-badge analytics">Analytics</span></td>
                                    <td>1 – 2 years</td>
                                    <td>Helps us understand website traffic and visitor interactions so we can improve platform performance.</td>
                                </tr>
                                <tr>
                                    <td><code>__gads</code>, <code>__gpi</code>, <code>SEARCH_SAMESITE</code></td>
                                    <td><span class="cookie-badge marketing">Marketing</span></td>
                                    <td>Up to 2 years</td>
                                    <td>Tracks ad performance and helps deliver customized content or relevant opportunities.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="cookies-section">
                    <h3>4. Third-Party Cookies</h3>
                    <p class="cookies-text">
                        Certain third-party services integrated into our website may place or access cookies on your device when their specific features are loaded or utilized. These services operate under their respective privacy policies and terms.
                    </p>
                </div>

                <div class="cookies-section">
                    <h3>5. Cookie Duration</h3>
                    <p class="cookies-text">
                        Cookies may be classified as session cookies or persistent cookies. Session cookies are automatically deleted when you close your browser, whereas persistent cookies remain on your device for a specified timeframe or until you manually clear them.
                    </p>
                </div>

                <div class="cookies-section">
                    <h3>6. Managing Cookies</h3>
                    <p class="cookies-text">
                        You have the right to manage or delete cookies via your browser settings. Most web browsers allow you to block cookies entirely, clear existing storage, or prompt you before a cookie is saved to your device.
                    </p>
                    <p class="cookies-text">
                        Please note that disabling essential cookies may impact certain core features of our website, including user account logins, session security, and live customer support tools.
                    </p>
                </div>

                <div class="cookies-section">
                    <h3>7. Changes to This Cookie Policy</h3>
                    <p class="cookies-text">
                        We may update this Cookie Policy from time to time to reflect modifications to our website, integrated technologies, or applicable regulatory requirements. Any updates will be posted directly on this page.
                    </p>
                </div>

                <div class="cookies-section" style="margin-bottom: 0;">
                    <h3>8. Contact Us</h3>
                    <p class="cookies-text">
                        If you have any questions regarding our use of cookies or this Cookie Policy, please feel free to reach out to us through our website's contact page.
                    </p>
                </div>

            </div>

        </div>
    </div>
@endsection