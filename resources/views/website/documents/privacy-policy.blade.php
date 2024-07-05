@extends('website.welcome')
@section('title', 'Privacy Policy')

@section('custom-styles')
    <style>
        .privacy p{
            font-size:16px;
            color:rgb(71, 71, 71);
            text-align: justify;
            margin-bottom:2px;
        }
        .privacy a{
            color:blue;
        }
        .privacy ul{
            list-style-type: lower-roman;
        }
        .privacy ul li{
            font-size:18px;
            text-align: justify;
            margin-top:25px;
        }
    </style>
@endsection

@section('content')

    <div class="mt-3 pb-4"></div>
    <section class="contact-us container">
        <h2 class="page-title">Privacy Policy</h2>
    </section>

    <hr class="mx-5">

    <section class="privacy container">
        <p>
            [Nneel’s LLC] ("we", "our", or "us") is committed to protecting the privacy and security of your personal information. 
            This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website 
            [www.nneelsglobal.com] (the "Site") and make purchases from our online store.
        </p>
        <ul>
            <li>Information We Collect:
                <p>
                    Personal Information: When you visit the Site, we may collect certain personal information from you, 
                    such as your name, email address, shipping address, billing address, phone number, and payment information 
                    (including credit card numbers).
                </p>
                <p>
                    Device Information: We may also collect information about your device, such as your IP address, 
                    browser type, operating system, and referring website URLs.
                </p>
                <p>
                    Cookies: Like many websites, we use "cookies" to enhance your experience and collect information
                    about how you use the Site.
                </p>
            </li>
            <li>
                How We Use Your Information:
                <p>
                    We may use the information we collect from you to process and fulfill your orders, communicate with you 
                    about your purchases, and provide customer support.
                </p>
                <p>
                    We may also use your information to personalize your experience on the Site, improve our products and services, 
                    and analyze trends and usage patterns.
                </p>
            </li>
            <li>
                Disclosure of Your Information:
                <p>
                    We may share your information with third-party service providers who assist us in operating our website,
                    conducting our business, or servicing you.
                </p>
                <p>
                    We may also disclose your information to comply with legal obligations, enforce our site policies, 
                    or protect our rights, property, or safety.
                </p>
            </li>
            <li>
                Data Security:
                <p>
                    We take reasonable measures to protect the security of your personal information and prevent 
                    unauthorized access, disclosure, alteration, or destruction.
                </p>
            </li>
            <li>
                Your Choices:
                <p>
                    You can choose not to provide certain personal information, although this may limit your ability to 
                    access certain features of the Site or make purchases.
                </p>
                <p>
                    You can also opt-out of receiving marketing communications from us by following the unsubscribe 
                    instructions included in the emails we send you.
                </p>
            </li>
            <li>
                Children's Privacy:
                <p>
                    The Site is not intended for use by children under the age of 13. We do not knowingly collect personal 
                    information from children under 13 years of age.
                </p>
            </li>
            <li>
                Updates to This Privacy Policy:
                <p>
                    We may update this Privacy Policy from time to time by posting a new version on the Site. 
                    We encourage you to review this page periodically for any changes.
                </p>
            </li>
            <li>
                Contact Us:
                <p>
                    If you have any questions or concerns about this Privacy Policy or our privacy practices, please contact us at [sales@nneelsglobal.com].
                    By using the Site, you consent to the terms of this Privacy Policy.
                </p>
            </li>
        </ul>
        <h6 style="color:blue;">Last Updated: [May 2024]</h6>
    </section>

    <div class="mb-5 pb-xl-5"></div>

@endsection

@section('custom-scripts')
@endsection
