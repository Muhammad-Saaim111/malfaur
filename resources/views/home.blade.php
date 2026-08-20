@extends('layouts.app')

@section('structured_data')
<script type="application/ld+json">
[
  {
    "@@context": "https://schema.org",
    "@@type": "ProfessionalService",
    "name": "Malfaur",
    "image": "{{ asset('images/hexafume/hexafume-original.png') }}",
    "@@id": "https://malfaur.com/",
    "url": "https://malfaur.com/",
    "telephone": "+923449121053",
    "address": {
      "@@type": "PostalAddress",
      "streetAddress": "DHA 1",
      "addressLocality": "Islamabad",
      "addressCountry": "PK"
    },
    "geo": {
      "@@type": "GeoCoordinates",
      "latitude": 33.5228,
      "longitude": 73.1492
    },
    "openingHoursSpecification": {
      "@@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday"
      ],
      "opens": "09:00",
      "closes": "18:00"
    },
    "sameAs": [
      "https://www.instagram.com/malfaur?igsh=MWplZXF2bGkzcG00eA==",
      "https://www.linkedin.com/company/malfaur"
    ]
  },
  {
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Malfaur Standard Work Process",
    "description": "Our proven 5-step methodology for delivering high-performance digital solutions.",
    "step": [
      {
        "@@type": "HowToStep",
        "name": "Choose Your Service",
        "text": "Select from our wide range of IT solutions — web, apps, marketing, design, or AI-powered services.",
        "url": "https://malfaur.com/#process"
      },
      {
        "@@type": "HowToStep",
        "name": "Share Your Requirements",
        "text": "Tell us about your goals and business needs so we can craft the right solution for you.",
        "url": "https://malfaur.com/#process"
      },
      {
        "@@type": "HowToStep",
        "name": "Consultation & Strategy",
        "text": "We'll set up a meeting to discuss ideas, propose strategies, and align with your vision.",
        "url": "https://malfaur.com/#process"
      },
      {
        "@@type": "HowToStep",
        "name": "Development & Delivery",
        "text": "Our expert team designs, develops, and delivers your project with quality and innovation.",
        "url": "https://malfaur.com/#process"
      },
      {
        "@@type": "HowToStep",
        "name": "Ongoing Support",
        "text": "We ensure your success with continuous support, updates, and improvements post-launch.",
        "url": "https://malfaur.com/#process"
      }
    ]
  }
]
</script>
@endsection

@section('content')
<!-- PRELOADER -->
<div id="preloader">
  <div class="preloader-3d-wrap">
    <div class="preloader-ring-track">
      <div class="preloader-ring-progress" id="ringProgress"></div>
    </div>
    <div class="preloader-logo-center">
      <img src="{{ asset('images/hexafume/hexafume-white.png') }}" id="preloader-img" alt="Malfaur" width="240" height="80"
        style="width:240px;height:80px;max-width:240px;max-height:80px;object-fit:contain;display:block;filter:brightness(1.1);"
        onerror="this.style.display='none';document.getElementById('preloader-fallback').style.display='block'"/>
      <div class="preloader-logo" id="preloader-fallback" style="display:none;">MAL<span>FAUR</span></div>
    </div>
  </div>
</div>

@php
  $hero = $page->getSectionContent('hero');
  $aboutSection = $page->getSectionContent('about');
  $cta = $page->getSectionContent('cta');
  $marquee = $page->getSectionContent('marquee');
  $servicesHeader = $page->getSectionContent('services_header');
  $processHeader = $page->getSectionContent('process_header');
  $portfolioHeader = $page->getSectionContent('portfolio_header');
  $testimonialsHeader = $page->getSectionContent('testimonials_header');
  $contactHeader = $page->getSectionContent('contact_header');
  
  $heroStats = $hero['stats'] ?? [];
  $marqueeItems = $marquee['items'] ?? ['Agentic AI Systems','eCommerce Growth Engines','Custom SaaS Development','Workflow Automation','Mobile App Development','DevOps & Cloud Infrastructure'];
@endphp

<!-- HERO -->
<section id="hero">
  <canvas id="heroCanvas" class="hero-canvas"></canvas>
  <div class="hero-grid"></div>
  <div class="hero-orb"></div>
  <div class="hero-content">
    <div class="hero-left">
      <div class="hero-badge"><span class="dot"></span>{{ $hero['badge'] ?? 'Intelligent IT Solutions' }}</div>
      <h1>{!! $hero['title'] ?? 'We Engineer <br/><span class="grad">Intelligent Systems</span><br/>For Global Scale.' !!}</h1>
      <p class="hero-sub">{{ $hero['subtitle'] ?? 'Malfaur partners with enterprise clients and fast-growing startups to design, build, and deploy agentic AI, robust SaaS platforms, and enterprise-grade software solutions.' }}</p>
      <div class="hero-actions">
        <a href="#services" class="btn-p">Explore Services <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        <a href="#portfolio" class="btn-s">View Our Work</a>
      </div>
    </div>
    <div class="hero-visual">
      <div class="logo-wrap">
        <div class="logo-glow"></div>
        <canvas id="logoSandCanvas" class="logo-sand-canvas"></canvas>
        <img src="{{ asset('images/hexafume/hexafume-white.png') }}" alt="Malfaur - Think Big | IT Services & Digital Solutions" class="hero-logo-img" loading="eager" id="heroLogoSource" width="360" height="200" style="width:100%;height:auto;max-width:360px;max-height:120px;object-fit:contain;display:block;">
      </div>
    </div>
    </div>
  </div>
  <div class="testi-dots" id="testiDots" aria-label="Testimonial navigation"></div>
</section>

<!-- STATS BANNER -->
<section class="stats-banner">
  <div class="stats-banner-inner">
    @if(isset($hero['stats']))
      @foreach($hero['stats'] as $index => $stat)
        <div class="stat-banner-card reveal" style="transition-delay: {{ $index * 0.1 }}s;">
          <div class="stat-banner-icon">
            @if($index == 0)
              <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            @elseif($index == 1)
              <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
            @else
              <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 000 20 14.5 14.5 0 000-20"/><path d="M2 12h20"/></svg>
            @endif
          </div>
          <div class="stat-banner-info">
            <div class="stat-banner-num"><span id="stat{{ $index+1 }}">0</span><span class="plus">+</span></div>
            <div class="stat-banner-lbl">{{ $stat['label'] }}</div>
          </div>
        </div>
      @endforeach
    @endif
  </div>
</section>

<!-- MARQUEE -->
<div class="marquee-section">
  <div class="marquee-track" id="marqueeTrack"></div>
</div>

<!-- ABOUT -->
<section id="about" style="padding:6rem 2rem;max-width:1300px;margin:0 auto;display:flex;flex-direction:column;align-items:center;text-align:center;gap:4rem;">
  <div class="reveal" style="max-width: 800px;">
    <span class="about-badge"><span class="dot"></span>{{ $aboutSection['badge'] ?? 'Who We Are' }}</span>
    <h2 style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Helvetica,Arial,sans-serif;font-weight:500;font-size:clamp(2rem,3.5vw,3rem);line-height:1.1;letter-spacing:-.02em;margin-bottom:1rem;">
      {!! $aboutSection['title'] ?? 'Transforming Ideas Into <span class="grad">Digital Reality</span>' !!}
    </h2>
    <p class="about-text" style="margin-left:auto; margin-right:auto;">{{ $aboutSection['desc_p1'] ?? "Malfaur is a software development company helping businesses build scalable digital products. Our team of engineers, designers, and technology experts creates custom software, AI solutions, SaaS platforms, and enterprise applications that solve real business challenges." }}</p>
    <p class="about-text" style="margin-left:auto; margin-right:auto;">{{ $aboutSection['desc_p2'] ?? "" }}</p>
    <a href="{{ route('about') }}" class="btn-p" style="display:inline-flex; margin-top: 1.5rem;">{{ $aboutSection['btn_text'] ?? 'About Us' }}</a>
  </div>
  
  <div class="about-cards-wrapper reveal" style="width:100%; overflow:hidden; position:relative; padding:1rem 0;">
    <div class="about-cards-marquee" style="display:flex; gap:2rem; width:max-content; animation:scrollLeftRight 20s linear infinite;">
      @php
        $aboutIcons = [
          '🚀' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="width: 24px; height: 24px; display: block;"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>',
          '⚡' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="width: 24px; height: 24px; display: block;"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>',
          '🔒' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="width: 24px; height: 24px; display: block;"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>',
          '🌍' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="width: 24px; height: 24px; display: block;"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>'
        ];
      @endphp
      
      @for ($i = 0; $i < 2; $i++)
        @if(isset($aboutSection['pillars']))
          @foreach($aboutSection['pillars'] as $pillar)
            <div class="about-card" style="width:300px; flex-shrink:0; text-align:left;">
              <div class="about-card-icon">
                {!! $aboutIcons[$pillar['icon'] ?? '🚀'] ?? '' !!}
              </div>
              <h3>{{ $pillar['title'] }}</h3>
              <p>{{ $pillar['desc'] }}</p>
            </div>
          @endforeach
        @else
          <div class="about-card" style="width:300px; flex-shrink:0; text-align:left;">
            <div class="about-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="width: 24px; height: 24px; display: block;"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></div>
            <h3>Innovation</h3>
            <p>Cutting Edge Tech</p>
          </div>
          <div class="about-card" style="width:300px; flex-shrink:0; text-align:left;">
            <div class="about-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="width: 24px; height: 24px; display: block;"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
            <h3>Performance</h3>
            <p>Optimized Solutions</p>
          </div>
          <div class="about-card" style="width:300px; flex-shrink:0; text-align:left;">
            <div class="about-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="width: 24px; height: 24px; display: block;"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
            <h3>Security</h3>
            <p>Enterprise Grade</p>
          </div>
          <div class="about-card" style="width:300px; flex-shrink:0; text-align:left;">
            <div class="about-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="width: 24px; height: 24px; display: block;"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg></div>
            <h3>Global Reach</h3>
            <p>20+ Countries</p>
          </div>
        @endif
      @endfor
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <div class="services-inner">
    <div class="services-head reveal">
      <span class="section-badge"><span class="dot"></span>{{ $servicesHeader['badge'] ?? 'What We Do' }}</span>
      <h2 class="section-title" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Helvetica,Arial,sans-serif;font-weight:500;font-size:clamp(2rem,3.5vw,3rem);line-height:1.1;letter-spacing:-.02em;margin-bottom:1rem;">{!! $servicesHeader['title'] ?? 'Our Software Development <span class="grad">Services</span>' !!}</h2>
      <p class="section-sub">{{ $servicesHeader['subtitle'] ?? 'We provide end-to-end software development services including AI solutions, SaaS development, web applications, mobile apps, cloud infrastructure, and digital transformation solutions.' }}</p>
    </div>
    @php
      $serviceImages = [
          asset('images/services/web_dev.png'), // Web
          asset('images/services/mobile_app.png?v=2'), // Mobile
          asset('images/services/ai_automation.png'), // AI
          asset('images/services/software_dev_new.jpg'), // Software
          asset('images/services/blockchain_dev.png?v=3'), // Blockchain (copied image)
          asset('images/services/ui_ux_dev.png?v=3'), // UI/UX (copied image)
          asset('images/services/marketing_dev.png?v=3'), // Marketing (copied image)
          asset('images/services/devops_dev.png?v=3'), // DevOps (copied image)
          asset('images/services/cyber_security.png?v=3'), // Cyber Resilience
      ];
    @endphp
    <div class="services-grid" id="servicesGrid">
      @foreach($services as $i => $s)
        <div class="service-card reveal" style="transition-delay: {{ ($i % 3) * 80 }}ms;">
          <div class="service-card-img">
            <img src="{{ $serviceImages[$i] ?? 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=600&q=80' }}" alt="{{ $s->name }}" loading="lazy">
          </div>
          <div class="service-card-body">
            <h3>{{ $s->name }}</h3>
            <p>{{ $s->description }}</p>
            <div class="svc-tags">
              @foreach($s->features as $t)
                <span class="svc-tag">{{ $t }}</span>
              @endforeach
            </div>
            <a href="{{ route('services') }}" class="svc-link">Learn More →</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- PROCESS -->
<section id="process" aria-labelledby="processHeader" style="padding:4rem 4rem;max-width:1300px;margin:0 auto;">
  <div class="process-head reveal">
    <span class="section-badge"><span class="dot"></span>{{ $processHeader['badge'] ?? 'How We Work' }}</span>
    <h2 id="processHeader" class="section-title" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Helvetica,Arial,sans-serif;font-weight:500;font-size:clamp(2rem,3.5vw,3rem);line-height:1.1;letter-spacing:-.02em;margin-bottom:1rem;">{!! $processHeader['title'] ?? 'Our Standard <br><span class="grad">Work Process</span>' !!}</h2>
    <p class="section-sub" style="margin:0 auto;">{{ $processHeader['subtitle'] ?? 'A proven methodology that ensures exceptional results every time' }}</p>
  </div>
  <ol class="process-list" id="processList">
    <div class="process-line"></div>
    @foreach($process_steps as $i => $s)
      <li class="process-step reveal" style="transition-delay: {{ $i * 100 }}ms;">
        <div class="step-num">{{ $s->step_number }}</div>
        <div class="step-content">
          <h3>{{ $s->title }}</h3>
          <p>{{ $s->description }}</p>
        </div>
        <div class="step-visual">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
            <title>{{ $s->title }} Icon</title>
            {!! $s->icon !!}
          </svg>
        </div>
      </li>
    @endforeach
  </ol>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials" style="padding:4.5rem 4rem;max-width:1300px;margin:0 auto;">
  <div class="testi-head reveal" style="text-align: center; margin-bottom: 4rem;">
    <span class="section-badge"><span class="dot"></span>{{ $testimonialsHeader['badge'] ?? 'Client Love' }}</span>
    <h2 class="section-title" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Helvetica,Arial,sans-serif;font-weight:500;font-size:clamp(2rem,3.5vw,3rem);line-height:1.1;letter-spacing:-.02em;margin-bottom:1rem;">{!! $testimonialsHeader['title'] ?? 'What Our Clients <span class="grad">Say</span>' !!}</h2>
  </div>
  <div class="testi-carousel-shell" style="overflow: hidden; width: 100%; position: relative;">
    <div class="testi-grid" id="testiGrid" style="display: flex; gap: 2rem; width: max-content; animation: scrollLeftRight 30s linear infinite;">
    @for ($j = 0; $j < 2; $j++)
      @foreach($testimonials as $i => $t)
        <div class="testi-card" style="width: 400px; flex-shrink: 0; white-space: normal;">
          <div class="testi-card-header">
            <div class="testi-author">
              <div class="testi-avatar">
                @if($t->photo_url)
                  <img
                    src="{{ $t->photo_url }}"
                    alt="{{ $t->client_name ?? $t->company }}"
                    loading="lazy"
                    width="44"
                    height="44"
                    style="width:44px;height:44px;max-width:44px;max-height:44px;object-fit:cover;object-position:center 18%;display:block;"
                  >
                @else
                  {{ $t->initials }}
                @endif
              </div>
              <div class="testi-author-info">
                <div class="testi-name">{{ $t->client_name ?? $t->company }}</div>
                <div class="testi-role">{{ $t->company }} • {{ $t->role }}</div>
              </div>
            </div>
            <div class="stars">★★★★★</div>
          </div>
          <div class="testi-quote-wrap">
            <p class="testi-q" data-full-quote="{{ e($t->quote) }}">"{{ $t->quote }}"</p>
            <button type="button" class="testi-toggle" aria-expanded="false" hidden>Read More</button>
          </div>
        </div>
      @endforeach
    @endfor
    </div>
  </div>
</section>

<!-- CTA -->
<section id="cta" style="padding:9rem 4rem;">
  <div class="cta-glow"></div>
  <div class="cta-inner reveal">
    <span class="section-badge"><span class="dot"></span>Get In Touch</span>
    <h2>{!! $cta['title'] ?? 'Ready to <span class="grad">Think Big</span>?' !!}</h2>
    <p>{{ $cta['subtitle'] ?? "Let's transform your vision into a digital masterpiece. Get in touch and let's build something extraordinary together." }}</p>
    <div class="cta-btns">
      <a href="#contact" class="btn-p">{{ $cta['btn1_text'] ?? 'Start Your Project' }} <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      <a href="tel:{{ str_replace(' ', '', $contactHeader['phone'] ?? '+923449121053') }}" class="btn-s">📞 {{ $cta['btn2_text'] ?? 'Call Us Now' }}</a>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" style="position: relative; overflow: hidden;">
  <div class="contact-bg-glow"></div>
  <div class="contact-inner">
    <div class="reveal">
      <div class="contact-info">
        <h2>{!! $contactHeader['title'] ?? 'Let\'s Start a <span class="grad">Conversation</span>' !!}</h2>
        <p>{{ $contactHeader['subtitle'] ?? 'We\'re in the business of providing strategic digital solutions. Reach out and let\'s discuss how we can help you grow.' }}</p>
        <div class="contact-items">
          <div class="c-item glass-card">
            <div class="c-icon-wrap">
              <div class="c-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
            </div>
            <div class="c-content">
              <h4>{{ $contactHeader['address_label'] ?? 'Our Office' }}</h4>
              <p>{{ $contactHeader['address'] ?? '16, Chestnut Drive, Stretton Hall, Oadby, Leicester LE2 4QX' }}</p>
            </div>
          </div>
          <div class="c-item glass-card">
            <div class="c-icon-wrap">
              <div class="c-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
            </div>
            <div class="c-content">
              <h4>{{ $contactHeader['email_label'] ?? 'Email Us' }}</h4>
              <a href="mailto:{{ $contactHeader['email'] ?? 'contact@malfaur.co.uk' }}">{{ $contactHeader['email'] ?? 'contact@malfaur.co.uk' }}</a>
            </div>
          </div>
          <div class="c-item glass-card">
            <div class="c-icon-wrap">
              <div class="c-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
            </div>
            <div class="c-content">
              <h4>{{ $contactHeader['phone_label'] ?? 'Call Us 24/7' }}</h4>
              <a href="tel:{{ str_replace(' ', '', $contactHeader['phone'] ?? '01163180653') }}">{{ $contactHeader['phone'] ?? '0116 3180 653' }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="reveal" style="transition-delay:.15s;">
      <div class="contact-form-wrap">
        <div class="contact-form-glow"></div>
        <div class="contact-form glass-card">
          <form id="contactForm">
            <div class="form-group"><input type="text" name="name" placeholder="Your Name" required/></div>
            <div class="form-row">
              <div class="form-group"><input type="email" name="email" placeholder="Email Address" required/></div>
              <div class="form-group"><input type="tel" name="phone" placeholder="Phone Number"/></div>
            </div>
            <div class="form-group">
              <select name="service" required>
                <option value="" disabled selected>Select a Service</option>
                <option value="Web Design & Development">Web Design & Development</option>
                <option value="Mobile App Development">Mobile App Development</option>
                <option value="AI Integration & Automation">AI Integration & Automation</option>
                <option value="Software Development">Software Development</option>
                <option value="Blockchain & Web3">Blockchain & Web3</option>
                <option value="Graphic & UI/UX Design">Graphic & UI/UX Design</option>
                <option value="Digital & Social Marketing">Digital & Social Marketing</option>
                <option value="DevOps Solutions">DevOps Solutions</option>
                <option value="Staff Augmentation">Staff Augmentation</option>
              </select>
            </div>
            <div class="form-group"><textarea name="message" placeholder="Tell us about your project..." required></textarea></div>
            <button type="submit" class="form-submit" aria-label="Send Message to Malfaur Team">
              Send Message
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('page_scripts')
<script>
// ===== THREE.JS SAND LOGO ASSEMBLY =====
(function initLogoSand() {
  const canvas = document.getElementById('logoSandCanvas');
  const img = document.getElementById('heroLogoSource');
  if (!canvas || !img) return;

  const W = 500, H = 500;
  const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });
  renderer.setSize(W, H);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(45, 1, 0.1, 2000);
  camera.position.z = 603.55; // Matches 500px canvas exactly (1 unit = 1 pixel)

  let points;
  let particles = [];
  const PARTICLE_COUNT = 8000;
  let isAssembled = false;
  let startTime = 0;

  function sampleImage() {
    const off = document.createElement('canvas');
    const aspect = img.naturalWidth / img.naturalHeight;
    let sw, sh;
    if (aspect > 1) { sw = 128; sh = 128 / aspect; }
    else { sh = 128; sw = 128 * aspect; }
    
    off.width = 128;
    off.height = 128;
    const offCtx = off.getContext('2d');
    offCtx.drawImage(img, (128 - sw) / 2, (128 - sh) / 2, sw, sh);
    const data = offCtx.getImageData(0, 0, 128, 128).data;
    
    const targets = [];
    const scale = 500 / sw; // Maps sampled width to exactly 500px screen widthdth to exactly 380px screen width
    for (let y = 0; y < 128; y++) {
      for (let x = 0; x < 128; x++) {
        const i = (y * 128 + x) * 4;
        if (data[i + 3] > 128) {
          targets.push({
            x: (x - 64) * scale,
            y: (64 - y) * scale
          });
        }
      }
    }
    return targets;
  }

  function initParticles() {
    const targets = sampleImage();
    const geo = new THREE.BufferGeometry();
    const pos = new Float32Array(PARTICLE_COUNT * 3);
    const targetPos = new Float32Array(PARTICLE_COUNT * 3);
    const delays = new Float32Array(PARTICLE_COUNT);

    for (let i = 0; i < PARTICLE_COUNT; i++) {
      // Start in a 3D cloud
      pos[i * 3] = (Math.random() - 0.5) * 600;
      pos[i * 3 + 1] = (Math.random() - 0.5) * 600;
      pos[i * 3 + 2] = -800 - Math.random() * 800;

      // Map to a random target point
      const target = targets[Math.floor(Math.random() * targets.length)];
      targetPos[i * 3] = target.x;
      targetPos[i * 3 + 1] = target.y;
      targetPos[i * 3 + 2] = 0;

      delays[i] = Math.random();
    }

    geo.setAttribute('position', new THREE.BufferAttribute(pos, 3));
    geo.setAttribute('targetPosition', new THREE.BufferAttribute(targetPos, 3));
    geo.setAttribute('delay', new THREE.BufferAttribute(delays, 1));

    const mat = new THREE.ShaderMaterial({
      transparent: true,
      uniforms: {
        time: { value: 0 },
        progress: { value: 0 },
        color: { value: new THREE.Color(0xffffff) }
      },
      vertexShader: `
        attribute vec3 targetPosition;
        attribute float delay;
        uniform float time;
        uniform float progress;
        varying float vOpacity;
        
        void main() {
          float p = clamp((progress - delay * 0.4) / 0.6, 0.0, 1.0);
          // Ease out cubic
          p = 1.0 - pow(1.0 - p, 3.0);
          
          vec3 pos = mix(position, targetPosition, p);
          
          // Add some "sand" jitter
          if (p < 0.95) {
            pos.x += sin(time * 5.0 + delay * 10.0) * (1.0 - p) * 5.0;
            pos.y += cos(time * 5.0 + delay * 10.0) * (1.0 - p) * 5.0;
          }
          
          // Floating animation after assembly
          if (p >= 1.0) {
            pos.y += sin(time * 0.8 + delay * 2.0) * 2.5;
            pos.x += cos(time * 0.5 + delay * 2.0) * 1.5;
          }

          vec4 mvPosition = modelViewMatrix * vec4(pos, 1.0);
          gl_PointSize = (2.5 * (1.0 - p * 0.5)) * (400.0 / -mvPosition.z);
          gl_Position = projectionMatrix * mvPosition;
          vOpacity = p;
        }
      `,
      fragmentShader: `
        varying float vOpacity;
        uniform vec3 color;
        void main() {
          float d = distance(gl_PointCoord, vec2(0.5));
          if (d > 0.5) discard;
          gl_FragColor = vec4(color, vOpacity * 0.9);
        }
      `
    });

    points = new THREE.Points(geo, mat);
    scene.add(points);
    startTime = performance.now();
  }

  function animate() {
    requestAnimationFrame(animate);
    const now = performance.now();
    const elapsed = (now - startTime) / 1000;
    
    if (points) {
      points.material.uniforms.time.value = elapsed;
      if (isAssembled) {
        const p = Math.min((now - assembleStartTime) / 3000, 1);
        points.material.uniforms.progress.value = p;
      }
    }
    
    renderer.render(scene, camera);
  }

  let assembleStartTime = 0;
  window.addEventListener('startLogoAssembly', () => {
    isAssembled = true;
    assembleStartTime = performance.now();
    
    // Trigger crossfade after assembly duration
    setTimeout(() => {
      canvas.style.transition = 'opacity 0.8s ease';
      canvas.style.opacity = '0';
      img.classList.add('logo-assembled');
      setTimeout(() => { canvas.style.display = 'none'; }, 800);
    }, 3000); // Wait exactly for assembly (3s)
  });

  if (img.complete) {
    initParticles();
  } else {
    img.onload = initParticles;
  }
  animate();
})();
</script>
<script>
// ===== THREE.JS HERO PARTICLES =====
(function initThree(){
  const canvas=document.getElementById('heroCanvas');
  const scene=new THREE.Scene();
  scene.fog=new THREE.FogExp2(0x05050a,0.0025);
  const camera=new THREE.PerspectiveCamera(75,innerWidth/innerHeight,.1,1000);
  camera.position.z=30;
  const renderer=new THREE.WebGLRenderer({canvas,antialias:true,alpha:true});
  renderer.setSize(innerWidth,innerHeight);
  renderer.setPixelRatio(Math.min(devicePixelRatio,2));

  const geo=new THREE.BufferGeometry();
  const count=1200;
  const pos=new Float32Array(count*3);
  for(let i=0;i<count*3;i++) pos[i]=(Math.random()-.5)*100;
  geo.setAttribute('position',new THREE.BufferAttribute(pos,3));
  const mat=new THREE.PointsMaterial({size:.12,color:0x0033ff,transparent:true,opacity:.7,blending:THREE.AdditiveBlending});
  scene.add(new THREE.Points(geo,mat));

  const snippets=['</>','{ }','=>','const','async','import','npm run','git push','useState()','deploy()','api/v2','.then()','export','return','//AI','docker','k8s','lambda'];
  const meshes=[];
  snippets.forEach(text=>{
    const c=document.createElement('canvas');
    c.width=256;c.height=128;
    const ctx=c.getContext('2d');
    ctx.font='600 56px Courier New';
    ctx.textAlign='center';ctx.textBaseline='middle';
    ctx.fillStyle='rgba(30,80,255,0.7)';
    ctx.fillText(text,128,64);
    const tex=new THREE.CanvasTexture(c);
    const mesh=new THREE.Mesh(
      new THREE.PlaneGeometry(3.5,1.8),
      new THREE.MeshBasicMaterial({map:tex,transparent:true,opacity:.25+Math.random()*.25,side:THREE.DoubleSide,depthWrite:false,blending:THREE.AdditiveBlending})
    );
    mesh.position.set((Math.random()-.5)*60,(Math.random()-.5)*40,(Math.random()-.5)*25-8);
    mesh.rotation.set((Math.random()-.5)*.4,(Math.random()-.5)*.6,0);
    mesh.userData={fs:.3+Math.random()*.7,fo:Math.random()*Math.PI*2};
    scene.add(mesh);meshes.push(mesh);
  });

  let tX=0,tY=0,mX=0,mY=0;
  document.addEventListener('mousemove',e=>{mX=(e.clientX-innerWidth/2)*.03;mY=(e.clientY-innerHeight/2)*.03;});
  const clock=new THREE.Clock();
  (function animate(){
    const t=clock.getElapsedTime();
    requestAnimationFrame(animate);
    tX+=(mX*.5-tX)*.04;tY+=(-mY*.5-tY)*.04;
    camera.position.x+=( tX-camera.position.x)*.05;
    camera.position.y+=(tY-camera.position.y)*.05;
    camera.lookAt(scene.position);
    scene.children[0].rotation.y=t*.04;
    meshes.forEach(m=>{m.position.y+=Math.sin(t*m.userData.fs+m.userData.fo)*.003;m.rotation.y+=.0008;});
    renderer.render(scene,camera);
  })();
  window.addEventListener('resize',()=>{camera.aspect=innerWidth/innerHeight;camera.updateProjectionMatrix();renderer.setSize(innerWidth,innerHeight);});
})();

// ===== COUNT UP STATS =====
(function countUp(){
  const stats = @json($heroStats);
  const targets = {};
  stats.forEach((s, i) => {
    targets[`stat${i+1}`] = parseInt(s.num);
  });
  
  const dur=3000;const start=performance.now();
  (function step(now){
    const p=Math.min((now-start)/dur,1);
    const e=1-Math.pow(1-p,3);
    Object.entries(targets).forEach(([id,t])=>{
      const el=document.getElementById(id);
      if(el) el.textContent=Math.round(t*e);
    });
    if(p<1) requestAnimationFrame(step);
  })(start);
})();

// ===== MARQUEE =====
(function initMarquee(){
  const items = @json($marqueeItems);
  const track=document.getElementById('marqueeTrack');
  const all=[...items,...items,...items];
  all.forEach(item=>{
    const d=document.createElement('div');
    d.className='marquee-item';
    d.innerHTML=`<span>${item}</span><span class="dot"></span>`;
    track.appendChild(d);
  });
})();

// ===== SERVICES (Now handled by Server Side Blade Template) =====

// ===== PROCESS (Now handled by Server Side Blade Template) =====

// ===== TESTIMONIALS (Now handled by Server Side Blade Template) =====

(function initTestimonialToggles() {
  const cards = document.querySelectorAll('.testi-card');

  function measureTruncation(card) {
    const quote = card.querySelector('.testi-q');
    if (!quote) return false;

    const wasExpanded = card.classList.contains('expanded');
    card.classList.remove('expanded');
    const isTruncated = quote.scrollHeight > quote.clientHeight + 1;
    if (wasExpanded) card.classList.add('expanded');
    return isTruncated;
  }

  function refreshCard(card) {
    const toggle = card.querySelector('.testi-toggle');
    if (!toggle) return;

    const isExpanded = card.classList.contains('expanded');
    const isTruncated = card.dataset.truncated === '1';

    toggle.hidden = !isTruncated;
    toggle.textContent = isExpanded ? 'Read Less' : 'Read More';
    toggle.setAttribute('aria-expanded', String(isExpanded));
  }

  cards.forEach(card => {
    const toggle = card.querySelector('.testi-toggle');
    if (!toggle) return;
    toggle.addEventListener('click', () => {
      card.classList.toggle('expanded');
      refreshCard(card);
    });
  });

  const run = () => {
    cards.forEach(card => {
      card.dataset.truncated = measureTruncation(card) ? '1' : '0';
      if (!card.classList.contains('expanded')) {
        refreshCard(card);
      } else {
        refreshCard(card);
      }
    });
  };
  window.addEventListener('load', run, { once: true });
  window.addEventListener('resize', () => requestAnimationFrame(run));
})();


// ===== FORM SUBMIT =====
const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const form = e.target;
    const btn = form.querySelector('.form-submit');
    const originalHtml = btn.innerHTML;
    
    btn.disabled = true;
    btn.innerHTML = '<span class="loading-spinner"></span> Sending...';
    btn.style.opacity = '0.7';

    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());

    try {
      const response = await fetch('{{ route("contact.send") }}', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
      });

      if (!response.ok) {
        const errorData = await response.json().catch(() => ({}));
        let errorMsg = errorData.message || `Server returned ${response.status}`;
        if (errorData.errors) errorMsg += '\nDetails: ' + Object.values(errorData.errors).flat().join(', ');
        throw new Error(errorMsg);
      }

      const result = await response.json();
      if (result.success) {
        btn.textContent = '✓ ' + result.message.split('!')[0] + '!';
        btn.style.background = '#00aa44';
        form.reset();
      } else {
        throw new Error(result.message || 'Submission failed');
      }
    } catch (error) {
      alert('Submission Failed: ' + error.message);
      btn.textContent = '✖ Error. Please try again.';
      btn.style.background = '#dd3333';
    } finally {
      setTimeout(() => {
        btn.disabled = false;
        btn.innerHTML = originalHtml;
        btn.style.background = '';
        btn.style.opacity = '';
      }, 4000);
    }
  });
}
</script>
@endpush
