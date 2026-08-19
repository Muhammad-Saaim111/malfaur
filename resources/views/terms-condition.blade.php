@extends('layouts.app')

@section('title', 'Terms & Condition — Malfaur')
@section('meta_description', 'Terms and Conditions for Malfaur.')

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
  <h1>Terms And Condition</h1>

  <h2>Acceptance of Terms and Conditions</h2>
  <p>By engaging with Malfaur, you agree to abide by and be bound by these Terms and Conditions. These Terms and Conditions constitute a legally binding agreement between Malfaur and the Client.</p>

  <h2>Services Offered</h2>
  <p>Malfaur provides Cyber Security services, including but not limited to:</p>
  <ul>
    <li>Cyber Security Strategy and Roadmap Service</li>
    <li>Policy Reviews and Updates</li>
    <li>Gap Analysis Against ISO27001/NIST/NIS UK Framework</li>
    <li>Regular GRC Review and Cyber Risk Management</li>
    <li>Board Representation</li>
    <li>Support with Technical Steer on Key Security Controls</li>
    <li>Cloud Infrastructure & Security Solutions</li>
    <li>Infrastructure As Code</li>
    <li>Zero-Trust Implementation as a Service</li>
    <li>DevSecOps Capability and as a Service</li>
    <li>Cloud To Cloud Migration</li>
    <li>Continuous Integration And Delivery Pipelines</li>
    <li>On-Prem To Cloud Migration</li>
    <li>DataOps</li>
    <li>FinOps as a Service</li>
    <li>Backup & Disaster Recovery as a Service (BDRaaS)</li>
    <li>Incident Response Management</li>
    <li>Automated Incident Response (AIR) and Planning</li>
    <li>Incident Simulation and Training</li>
    <li>Continuous Improvement</li>
    <li>24/7 Incident Response Support</li>
  </ul>

  <h2>Client Responsibilities</h2>
  <p>The Client agrees to:</p>
  <ul>
    <li>Provide accurate and complete information necessary for the provision of services.</li>
    <li>Collaborate with Malfaur to fulfil project requirements.</li>
    <li>Adhere to payment terms and deadlines outlined in separate agreements.</li>
    <li>Notify Malfaur promptly of any issues or concerns related to services.</li>
  </ul>

  <h2>Payment</h2>
  <p>Payment terms and rates will be specified in a separate agreement or invoice. Late payments may result in the suspension of services and may incur additional fees.</p>

  <h2>Confidentiality</h2>
  <p>Both parties agree to maintain the confidentiality of all sensitive information disclosed during the course of the engagement. This includes, but is not limited to, trade secrets, proprietary information, and personal data.</p>

  <h2>Intellectual Property</h2>
  <p>Unless otherwise specified in a separate agreement, any intellectual property created during the provision of services will be owned by Malfaur</p>

  <h2>Termination</h2>
  <p>Either party may terminate an engagement in writing with prior notice, subject to any termination fees or penalties specified in separate agreements.</p>

  <h2>Limitation of Liability</h2>
  <p>Malfaur shall not be liable for any indirect, consequential, or incidental damages arising out of or related to the services provided.</p>

  <h2>Governing Law</h2>
  <p>These Terms and Conditions shall be governed by and construed in accordance with the laws of United Kingdom.</p>

  <h2>Amendments</h2>
  <p>Malfaur reserves the right to amend these Terms and Conditions as necessary. Clients will be notified of any changes in advance.</p>

  <h2>Entire Agreement</h2>
  <p>These Terms and Conditions, along with any separate agreements, constitute the entire agreement between Malfaur and the Client, superseding all prior agreements, written or oral.</p>

  <h2>Contact Information</h2>
  <p>If you have any questions or concerns about these Terms and Conditions, please contact us at <a href="mailto:contact@malfaur.co.uk" style="color:var(--primary);">contact@malfaur.co.uk</a>.</p>
</div>
@endsection
