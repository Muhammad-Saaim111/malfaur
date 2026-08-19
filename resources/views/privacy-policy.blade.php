@extends('layouts.app')

@section('title', 'Privacy Policy — Malfaur')
@section('meta_description', 'Privacy Policy for Malfaur.')

@push('page_styles')
<style>
  .legal-page { padding: 8rem 4rem 4rem; max-width: 900px; margin: 0 auto; color: rgba(255, 255, 255, 0.8); line-height: 1.8; }
  .legal-page h1 { font-size: 3rem; margin-bottom: 2rem; color: #fff; }
  .legal-page h2 { font-size: 1.8rem; margin-top: 2.5rem; margin-bottom: 1rem; color: #fff; }
  .legal-page p { margin-bottom: 1.2rem; }
  .legal-page ul { margin-left: 1.5rem; margin-bottom: 1.5rem; }
  .legal-page li { margin-bottom: 0.5rem; }
  .legal-page strong { color: #fff; }
  @media(max-width: 768px) { .legal-page { padding: 6rem 2rem 2rem; } }
</style>
@endpush

@section('content')
<div class="legal-page">
  <h1>Privacy Policy</h1>
  <p>Malfaur is committed to protecting the privacy of our clients, website visitors, and users of our services. This Privacy Policy outlines how we collect, use, and safeguard your personal information. By accessing our website or using our services, you consent to the practices described in this policy.</p>

  <h2>Information We Collect</h2>
  <p><strong>Personal Information:</strong> We may collect personal information, such as names, email addresses, phone numbers, and job titles, when you voluntarily provide it to us through our website, email, or other communication channels.</p>
  <p><strong>Usage Data:</strong> We may collect non-personal information about how you interact with our website and services, including your IP address, browser type, and pages visited. We use this information to improve our website and services.</p>

  <h2>How We Use Your Information</h2>
  <p>We may use your personal information for the following purposes:</p>
  <ul>
    <li><strong>Providing Services:</strong> To fulfil contracts with clients and provide IT services.</li>
    <li><strong>Communication:</strong> To respond to your inquiries, provide support, and send important updates.</li>
    <li><strong>Marketing:</strong> To send you information about our services, promotions, and newsletters. You can opt out of marketing communications at any time.</li>
    <li><strong>Analytics:</strong> To analyse website usage and improve our services.</li>
  </ul>

  <h2>Data Sharing</h2>
  <p>We do not sell, rent, or trade your personal information to third parties. However, we may share your information with:</p>
  <ul>
    <li><strong>Service Providers:</strong> We may engage third-party service providers to assist with our operations and services, subject to appropriate data protection agreements.</li>
    <li><strong>Legal Compliance:</strong> We may disclose information when required by law or to protect our rights, privacy, safety, or property.</li>
  </ul>

  <h2>Data Security</h2>
  <p>We take reasonable measures to protect your personal information from unauthorized access, disclosure, alteration, or destruction. However, no method of transmission over the internet or electronic storage is completely secure. Therefore, we cannot guarantee absolute security.</p>

  <h2>Your Rights</h2>
  <p>You have the right to:</p>
  <ul>
    <li>Access and correct your personal information.</li>
    <li>Withdraw your consent at any time.</li>
    <li>Delete your personal information, subject to legal requirements.</li>
  </ul>
  <p>To exercise these rights or ask questions about your data, please contact us at <a href="mailto:contact@malfaur.co.uk" style="color:var(--primary);">contact@malfaur.co.uk</a>.</p>

  <h2>Cookies and Tracking</h2>
  <p>Our website may use cookies and similar tracking technologies to collect information about your browsing activities. You can control cookies through your browser settings.</p>

  <h2>Changes to this Privacy Policy</h2>
  <p>We may update this Privacy Policy from time to time to reflect changes in our practices or for legal reasons. We will notify you of any significant updates through our website or other communication channels.</p>

  <h2>Contact Us</h2>
  <p>If you have any questions, concerns, or requests regarding this Privacy Policy, please contact us at <strong><a href="mailto:contact@malfaur.co.uk" style="color:var(--primary);">contact@malfaur.co.uk</a></strong>.</p>
</div>
@endsection
