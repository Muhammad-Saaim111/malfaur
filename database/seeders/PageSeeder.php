<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // --- 1. HOME PAGE ---
        $home = \App\Models\Page::updateOrCreate(['slug' => 'home'], [
            'name' => 'Home', 'type' => 'Landing Page', 'status' => 'live', 'author' => 'Admin',
            'meta_title' => 'Hexafume — Think Big | IT Services & Digital Solutions',
            'meta_description' => 'We design and deploy agentic AI, high-performance SaaS platforms, and automation systems that turn ideas into scalable, revenue-generating products.',
        ]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $home->id, 'section_key' => 'hero'], ['sort_order' => 1, 'content' => [
            'badge' => 'Intelligent IT Solutions',
            'title' => 'We Engineer <br/><span class="grad">Intelligent Systems</span><br/>For Global Scale.',
            'subtitle' => 'Malfaur partners with enterprise clients and fast-growing startups to design, build, and deploy agentic AI, robust SaaS platforms, and enterprise-grade software solutions.',
            'stats' => [
                ['num' => '150', 'label' => 'Solutions Architected'],
                ['num' => '40', 'label' => 'Technical Experts'],
                ['num' => '15', 'label' => 'Core Verticals'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $home->id, 'section_key' => 'marquee'], ['sort_order' => 2, 'content' => [
            'items' => ['Agentic AI Systems', 'eCommerce Growth Engines', 'Custom SaaS Development', 'Workflow Automation', 'Mobile App Development', 'DevOps & Cloud Infrastructure']
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $home->id, 'section_key' => 'about'], ['sort_order' => 3, 'content' => [
            'badge' => 'Who We Are',
            'title' => 'A Software Development Partner for Digital Transformation',
            'desc_p1' => "Hexafume is a software development company helping businesses build scalable digital products. Our team of engineers, designers, and technology experts creates custom software, AI solutions, SaaS platforms, and enterprise applications that solve real business challenges.",
            'desc_p2' => "",
            'pillars' => [
                ['title' => 'Innovation', 'desc' => 'Cutting Edge Tech', 'icon' => '🚀'],
                ['title' => 'Performance', 'desc' => 'Optimized Solutions', 'icon' => '⚡'],
                ['title' => 'Security', 'desc' => 'Enterprise Grade', 'icon' => '🔒'],
                ['title' => 'Global Reach', 'desc' => '20+ Countries', 'icon' => '🌍'],
            ],
            'btn_text' => 'About Us'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $home->id, 'section_key' => 'services_header'], ['sort_order' => 4, 'content' => [
            'badge' => 'What We Do',
            'title' => 'Our Software Development <span class="grad">Services</span>',
            'subtitle' => 'We provide end-to-end software development services including AI solutions, SaaS development, web applications, mobile apps, cloud infrastructure, and digital transformation solutions.'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $home->id, 'section_key' => 'process_header'], ['sort_order' => 5, 'content' => [
            'badge' => 'How We Work',
            'title' => 'Our Standard <br><span class="grad">Work Process</span>',
            'subtitle' => 'A proven methodology that ensures exceptional results every time'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $home->id, 'section_key' => 'portfolio_header'], ['sort_order' => 6, 'content' => [
            'badge' => 'Case Studies',
            'title' => 'Featured <span class="grad">Projects</span>',
            'subtitle' => 'Explore our portfolio of transformative digital experiences'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $home->id, 'section_key' => 'testimonials_header'], ['sort_order' => 7, 'content' => [
            'badge' => 'Client Love',
            'title' => 'What Our Clients <span class="grad">Say</span>'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $home->id, 'section_key' => 'contact_header'], ['sort_order' => 8, 'content' => [
            'badge' => 'Get In Touch',
            'title' => "Let's Start a <span class=\"grad\">Conversation</span>",
            'subtitle' => "We're in the business of providing strategic digital solutions. Reach out and let's discuss how we can help you grow.",
            'address_label' => 'Our Office',
            'address' => 'DHA 1, Islamabad, Pakistan',
            'email_label' => 'Email Us',
            'email' => 'info@hexafume.com',
            'phone_label' => 'Call Us 24/7',
            'phone' => '+92 344 9121053'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $home->id, 'section_key' => 'cta'], ['sort_order' => 9, 'content' => [
            'title' => 'Ready to Build Your Next Digital Product?',
            'subtitle' => "Partner with Hexafume to build scalable software, AI-powered solutions, SaaS platforms, and innovative digital products that help your business grow.",
            'btn1_text' => 'Start Your Project',
            'btn2_text' => 'Call Us Now',
        ]]);


        // --- 2. ABOUT PAGE ---
        $about = \App\Models\Page::updateOrCreate(['slug' => 'about'], [
            'name' => 'About', 'type' => 'Information Page', 'status' => 'live', 'author' => 'Admin',
            'meta_title' => 'About Us — Hexafume | Who We Are',
            'meta_description' => 'Learn about Hexafume — our story, mission, values, and the team driving digital transformation since 2022.',
        ]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $about->id, 'section_key' => 'hero'], ['sort_order' => 1, 'content' => [
            'badge' => 'Who We Are',
            'title' => 'Engineering <span class="grad">Custom Software Solutions</span> for Global Scale',
            'subtitle' => 'Malfaur is a custom software development partner engineering tailored applications, agentic AI solutions, high-performance SaaS, and web platforms for startups and enterprise clients worldwide.',
            'stats' => [
                ['num' => '300', 'label' => 'Projects Delivered'],
                ['num' => '35', 'label' => 'Expert Engineers'],
                ['num' => '20', 'label' => 'Countries Served'],
                ['num' => '3', 'label' => 'Years Building'],
            ],
            'btn1_text' => 'Explore Services',
            'btn2_text' => 'Start a Project',
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $about->id, 'section_key' => 'story'], ['sort_order' => 2, 'content' => [
            'badge' => 'Our Story',
            'title' => 'From A <span class="grad">Daring Idea</span> to Global Footprint',
            'p1' => 'Malfaur was established with a singular mission: empowering organizations to convert breakthrough concepts into high-yielding digital systems. Our dedicated engineers focus on delivering tailored software solutions grounded in performance, security, and sustainable collaboration.',
            'p2' => 'Since our inception in 2022, we have operated on a core philosophy: combining startup agility, enterprise capability, and deep client-centered dedication.',
            'journey_badge' => 'Our Journey',
            'btn_text' => 'Meet the Team',
            'timeline' => [
                ['year' => '2024', 'title' => 'Founded in Leicester', 'desc' => 'Launched with a vision to deliver world-class software development services.'],
                ['year' => '2025', 'title' => 'First 50 Projects Shipped', 'desc' => 'Successfully completed over 50 software development projects for clients across multiple industries.'],
                ['year' => '2026', 'title' => 'AI Division Launched', 'desc' => 'Expanded AI development capabilities and launched a dedicated AI research and automation division.'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $about->id, 'section_key' => 'mission_vision'], ['sort_order' => 3, 'content' => [
            'badge' => 'Our Foundation',
            'title' => 'Purpose, Direction & <span class="grad">Principles</span>',
            'subtitle' => 'The commitments and convictions that shape the way we work, collaborate, and deliver value to every client.',
            'mission_title' => 'Why We Exist',
            'mission_text' => 'We exist to eliminate the gap between business ambition and technical execution. Malfaur partners with forward-thinking organizations to engineer software that is fast, reliable, and built to outlast market shifts.',
            'vision_title' => 'Where We Are Headed',
            'vision_text' => 'To be recognised as the engineering partner of choice for high-growth businesses — known not just for what we build, but for how deeply we care about outcomes.',
            'values' => [
                ['emoji' => '🔥', 'title' => 'Uncompromising Quality',  'text' => 'Average is not in our vocabulary. Every deliverable must exceed the standard we set the day before.'],
                ['emoji' => '🤝', 'title' => 'Genuine Partnership',     'text' => 'We treat every client engagement as a shared endeavour — your wins are celebrations we take personally.'],
                ['emoji' => '💡', 'title' => 'Curiosity-Driven Growth', 'text' => 'We stay ahead by constantly exploring new tools, frameworks, and approaches that push the boundaries of what is possible.'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $about->id, 'section_key' => 'team_teaser'], ['sort_order' => 4, 'content' => [
            'badge' => 'The IT Core Team',
            'title' => 'Tech Specialists, <span class="grad">Unified Purpose</span>',
            'subtitle' => 'Malfaur brings together seasoned IT consultants, systems administrators, and tech support specialists driven by a singular standard: delivering IT solutions that scale seamlessly and solve complex challenges.',
            'highlights' => [
                'Enterprise IT solutions active',
                'IT infrastructure domains mapped',
                'Vetted IT professionals',
                'Dynamically updated tech roster',
            ],
            'btn_text' => 'Meet the IT Team'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $about->id, 'section_key' => 'pillars'], ['sort_order' => 5, 'content' => [
            'badge' => 'Why Malfaur',
            'title' => 'What Sets Us <span class="grad">Apart</span>',
            'desc'  => 'Six defining attributes that make Malfaur the engineering partner businesses return to, project after project.',
            'items' => [
                ['title' => 'Intelligence-Led Engineering',  'desc' => 'We bake AI reasoning into every stage of development — from architecture review to automated QA pipelines.',       'icon' => 'brain'],
                ['title' => 'Security from Day One',         'desc' => 'Data protection, role-based access control, and threat modelling are built into the foundation — never bolted on.', 'icon' => 'shield'],
                ['title' => 'Rapid Iterative Delivery',      'desc' => 'Short release cycles, transparent progress dashboards, and structured demos keep you in full control at all times.','icon' => 'refresh'],
                ['title' => 'Senior-Only Delivery Teams',    'desc' => 'Every Malfaur project is staffed exclusively with senior engineers — your codebase is never a training exercise.',   'icon' => 'users'],
                ['title' => 'Architecture Built to Grow',    'desc' => 'We design systems to handle your next milestone before you reach it — scalability is a default, not an upgrade.',   'icon' => 'trending-up'],
                ['title' => 'Long-Term Engineering Support', 'desc' => 'Post-launch, we remain hands-on — monitoring performance, shipping patches, and evolving your product with you.',    'icon' => 'message-square'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $about->id, 'section_key' => 'cta'], ['sort_order' => 6, 'content' => [
            'badge' => "Let's Build",
            'title' => 'Ready to <span class="grad">Think Big</span>?',
            'subtitle' => "Let's transform your vision into a digital masterpiece. Get in touch and let's build something extraordinary together.",
            'btn1_text' => 'Start Your Project',
            'btn2_text' => 'Call Us Now',
        ]]);


        // --- 3. SERVICES PAGE ---
        $services = \App\Models\Page::updateOrCreate(['slug' => 'services'], [
            'name' => 'Services', 'type' => 'Service Catalog', 'status' => 'live', 'author' => 'Admin',
            'meta_title' => 'Services — Hexafume | Digital Solutions That Scale',
        ]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $services->id, 'section_key' => 'hero'], ['sort_order' => 1, 'content' => [
            'badge' => 'What We Do',
            'title' => 'Our <span class="grad">Services</span>',
            'subtitle' => 'Comprehensive software engineering, intelligent systems design, agentic AI, and strategic technology consulting built for global scale.',
            'tags' => ['Agentic AI', 'SaaS Development', 'Web & Mobile Apps', 'UI/UX Design', 'Blockchain', 'DevOps', 'Digital Marketing']
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $services->id, 'section_key' => 'practices_header'], ['sort_order' => 2, 'content' => [
            'badge' => 'Full Capability Stack',
            'title' => 'Everything You Need to <span class="grad">Scale</span>',
            'desc' => 'Eight practice areas. One unified team. Engineered for speed, quality, and long-term impact.',
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $services->id, 'section_key' => 'features_strip'], ['sort_order' => 3, 'content' => [
            'badge' => 'Why Us',
            'title' => 'Every Project Comes With <span class="grad">This</span>',
            'items' => [
                ['icon' => '⚡', 'title' => 'Speed Without Compromise', 'desc' => 'Agile sprints, daily standups, and bi-weekly demos. Fast delivery without cutting corners.'],
                ['icon' => '🔒', 'title' => 'Enterprise Security', 'desc' => 'Every system is hardened with penetration testing, encryption, and SOC 2 alignment.'],
                ['icon' => '📈', 'title' => 'Built to Scale', 'desc' => "Architecture designed for your 10x future — not just today's requirements."],
                ['icon' => '🤝', 'title' => 'Lifetime Support', 'desc' => 'Ongoing maintenance, monitoring, and strategic guidance long after launch day.'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $services->id, 'section_key' => 'tech_header'], ['sort_order' => 4, 'content' => [
            'badge' => 'Our Stack',
            'title' => 'The Technologies We <span class="grad">Leverage</span>',
            'subtitle' => 'We align modern frameworks and robust infrastructures with your exact business objectives to build high-performance systems.'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $services->id, 'section_key' => 'cta'], ['sort_order' => 5, 'content' => [
            'badge' => 'Get Started',
            'title' => 'Have a Project in <span class="grad">Mind?</span>',
            'subtitle' => 'Let\'s talk about your goals, challenges, and how we can build something extraordinary together.',
            'btn1_text' => 'Start Your Project',
            'btn2_text' => 'See Our Process'
        ]]);

        // --- 4. PROCESS PAGE ---
        $process = \App\Models\Page::updateOrCreate(['slug' => 'process'], [
            'name' => 'Process', 'type' => 'Information Page', 'status' => 'live', 'author' => 'Admin',
        ]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $process->id, 'section_key' => 'hero'], ['sort_order' => 1, 'content' => [
            'badge' => 'IT Delivery Process',
            'title' => 'Our IT Implementation <span class="grad">Lifecycle</span>',
            'subtitle' => 'A structured, collaborative approach designed to take your business from strategic planning to enterprise-grade IT infrastructure.',
            'stats' => [
                ['num' => '5', 'label' => 'Structured Phases'],
                ['num' => '24/7', 'label' => 'Proactive Monitoring'],
                ['num' => '99.9%', 'label' => 'Uptime SLA'],
                ['num' => '100%', 'label' => 'Data Protection'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $process->id, 'section_key' => 'methodology_header'], ['sort_order' => 2, 'content' => [
            'badge' => 'The Methodology',
            'title' => 'Five Steps to <span class="grad">Exceptional IT</span>',
            'desc' => 'Every engagement — regardless of size or complexity — follows this battle-tested infrastructure framework.',
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $process->id, 'section_key' => 'phases'], ['sort_order' => 3, 'content' => [
            'badge' => 'Inside Each Phase',
            'title' => 'What Happens <span class="grad">Behind the Scenes</span>',
            'desc' => 'The rigorous sub-processes that make every IT deployment work.',
            'items' => [
                ['title' => 'IT Assessment & Planning', 'desc' => 'Stakeholder interviews, risk assessments, and technical feasibility studies.', 'badge' => 'Weeks 1-2'],
                ['title' => 'Network Architecture Design', 'desc' => 'Network topologies, hardware selection, and security frameworks.', 'badge' => 'Weeks 2-4'],
                ['title' => 'System Integration & Deployment', 'desc' => 'Server provisioning, cloud migrations, and software integrations.', 'badge' => 'Weeks 5-8'],
                ['title' => 'Compliance & Performance Audits', 'desc' => 'Automated stress testing, vulnerability scans, and ISO/GDPR compliance checks.', 'badge' => 'Pre-Launch'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $process->id, 'section_key' => 'tools'], ['sort_order' => 4, 'content' => [
            'badge' => 'Our Toolkit',
            'title' => 'Tools That Power <span class="grad">Every Integration</span>',
            'desc' => 'Industry-leading tools, tailored workflows, and practices refined across hundreds of enterprise networks.',
            'items' => [
                ['emoji' => '📋', 'title' => 'ServiceNow / Jira', 'desc' => 'IT Service Management & Ticketing.'],
                ['emoji' => '🌐', 'title' => 'Cisco / Fortinet', 'desc' => 'Enterprise Networking & Firewalls.'],
                ['emoji' => '📊', 'title' => 'SolarWinds / Datadog', 'desc' => 'Infrastructure & Performance Monitoring.'],
                ['emoji' => '☁️', 'title' => 'AWS / Azure', 'desc' => 'Scalable Cloud Enterprise Hosting.'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $process->id, 'section_key' => 'faq_header'], ['sort_order' => 5, 'content' => [
            'badge' => 'Common Questions',
            'title' => 'Frequently <span class="grad">Asked</span>'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $process->id, 'section_key' => 'cta'], ['sort_order' => 6, 'content' => [
            'badge' => 'Ready to Start',
            'title' => 'Let\'s Build Something <span class="grad">Remarkable</span>',
            'subtitle' => 'Ready to experience a process that actually works? Let\'s kick off your project today.',
            'btn1_text' => 'Start Your Project',
            'btn2_text' => 'Browse Services'
        ]]);

        // --- 5. WORK PAGE ---
        $work = \App\Models\Page::updateOrCreate(['slug' => 'work'], [
            'name' => 'Work', 'type' => 'Portfolio Page', 'status' => 'live', 'author' => 'Admin',
        ]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $work->id, 'section_key' => 'hero'], ['sort_order' => 1, 'content' => [
            'badge' => 'Our Work',
            'title' => 'Real Products.<br><span class="grad">Real Impact.</span>',
            'subtitle' => 'From streaming platforms to financial trading tools — every project we ship is a testament to engineering discipline, creative thinking, and obsessive attention to detail.',
            'stats' => [
                ['num' => '6+', 'label' => 'Flagship Products'],
                ['num' => '12+', 'label' => 'Industries Served'],
                ['num' => '300+', 'label' => 'Projects Delivered'],
                ['num' => '3', 'label' => 'Years Building'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $work->id, 'section_key' => 'impact'], ['sort_order' => 2, 'content' => [
            'badge' => 'By The Numbers',
            'title' => 'The <span class="grad">Impact</span> We\'ve Made',
            'subtitle' => 'Measurable outcomes across every project we\'ve delivered.',
            'items' => [
                ['icon' => '🚀', 'num' => '6+', 'label' => 'Live Products Shipped'],
                ['icon' => '🌍', 'num' => '20+', 'label' => 'Countries Served'],
                ['icon' => '⚡', 'num' => '99.9%', 'label' => 'Average Uptime SLA'],
                ['icon' => '⭐', 'num' => '100%', 'label' => 'Client Satisfaction Rate'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $work->id, 'section_key' => 'testimonials_header'], ['sort_order' => 3, 'content' => [
            'badge' => 'Client Love',
            'title' => 'What Our Clients <span class="grad">Say</span>'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $work->id, 'section_key' => 'tech_header'], ['sort_order' => 4, 'content' => [
            'badge' => 'Tech Behind The Work',
            'title' => 'Built With the <span class="grad">Best Stack</span>',
            'subtitle' => 'We pick the right tool for each job — always staying on the leading edge.'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $work->id, 'section_key' => 'cta'], ['sort_order' => 5, 'content' => [
            'badge' => 'Let\'s Build Together',
            'title' => 'Your Project Could Be <span class="grad">Next.</span>',
            'subtitle' => 'Whether it\'s a bold product idea or a complex platform — we have the team, the process, and the hunger to make it extraordinary.',
            'btn1_text' => 'Start Your Project',
            'btn2_text' => 'See Our Process'
        ]]);

        // --- 6. TEAM PAGE ---
        $team = \App\Models\Page::updateOrCreate(['slug' => 'team'], [
            'name' => 'Team', 'type' => 'Member List', 'status' => 'live', 'author' => 'Admin',
        ]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $team->id, 'section_key' => 'hero'], ['sort_order' => 1, 'content' => [
            'badge' => 'The IT Specialists',
            'title' => 'The Minds Behind<br>the <span class="grad">IT Solutions</span>',
            'subtitle' => 'We are a team of IT consultants, network architects, and support specialists united by one mission — turning complex technical challenges into seamless enterprise realities.'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $team->id, 'section_key' => 'culture'], ['sort_order' => 2, 'content' => [
            'badge' => 'Our Principles',
            'title' => 'Built on <span class="grad">Standards</span>',
            'desc' => 'The core values that guide how we audit, deploy, and secure your systems — every single day.',
            'items' => [
                ['title' => 'Proactive Support', 'desc' => 'We monitor systems 24/7, resolving network anomalies before they cause business downtime.'],
                ['title' => 'Uncompromising Security', 'desc' => 'Zero-trust architecture is our default. We lock down your endpoints and secure your data.'],
                ['title' => 'Constant Innovation', 'desc' => 'We stay ahead of the technology curve, integrating modern cloud tools and automation.'],
                ['title' => 'Infrastructure First', 'desc' => 'We build resilient foundations. Solid, scalable networks are our obsession.'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $team->id, 'section_key' => 'cta'], ['sort_order' => 3, 'content' => [
            'badge' => 'Hiring',
            'title' => 'Want to Join the <span class="grad">Team?</span>',
            'subtitle' => 'We\'re always looking for brilliant IT professionals to join our consulting and support teams. If that sounds like you, let\'s talk.',
            'btn1_text' => 'Apply Now',
            'btn2_text' => 'Send Us a Message'
        ]]);

        // --- 7. CONTACT PAGE ---
        $contact = \App\Models\Page::updateOrCreate(['slug' => 'contact'], [
            'name' => 'Contact', 'type' => 'Form Page', 'status' => 'live', 'author' => 'Admin',
        ]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $contact->id, 'section_key' => 'hero'], ['sort_order' => 1, 'content' => [
            'badge' => 'Get In Touch',
            'title' => 'Let\'s Start a <span class="grad">Conversation</span>',
            'subtitle' => 'We\'re in the business of providing strategic digital solutions.'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $contact->id, 'section_key' => 'info_col'], ['sort_order' => 2, 'content' => [
            'title' => 'We\'d Love to <span class="grad">Hear From You</span>',
            'desc' => 'Whether you have a project in mind, a question about our services, or just want to say hello — drop us a line.'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $contact->id, 'section_key' => 'contact_items'], ['sort_order' => 3, 'content' => [
            'items' => [
                ['title' => 'Our Office', 'value' => 'DHA 1, Islamabad, Pakistan', 'link' => '#'],
                ['title' => 'Email Us', 'value' => 'info@hexafume.com', 'link' => 'mailto:info@hexafume.com'],
                ['title' => 'Call Us 24/7', 'value' => '+92 344 9121053', 'link' => 'tel:+923449121053'],
                ['title' => 'Business Hours', 'value' => 'Mon–Fri, 9:00 AM – 6:00 PM PKT', 'link' => '#'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $contact->id, 'section_key' => 'socials'], ['sort_order' => 4, 'content' => [
            'items' => [
                ['platform' => 'Instagram', 'link' => 'https://www.instagram.com/hexafume?igsh=MWplZXF2bGkzcG00eA=='],
                ['platform' => 'LinkedIn', 'link' => 'https://www.linkedin.com/company/hexafume'],
            ]
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $contact->id, 'section_key' => 'response_badge'], ['sort_order' => 5, 'content' => [
            'title' => 'Typical response time: under 4 hours.',
            'subtitle' => 'Our team is active Monday–Friday. Urgent? Call us directly — we\'re available 24/7.'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $contact->id, 'section_key' => 'map_header'], ['sort_order' => 6, 'content' => [
            'badge' => 'Find Us',
            'title' => 'We\'re Based in <span class="grad">Islamabad</span>',
            'subtitle' => 'DHA Phase 1, Islamabad — serving clients across Pakistan and the globe.'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $contact->id, 'section_key' => 'offices_header'], ['sort_order' => 7, 'content' => [
            'badge' => 'Our Presence',
            'title' => 'Where We <span class="grad">Operate</span>'
        ]]);

        \App\Models\PageSection::updateOrCreate(['page_id' => $contact->id, 'section_key' => 'offices'], ['sort_order' => 8, 'content' => [
            'items' => [
                ['flag' => '🇵🇰', 'city' => 'Islamabad, Pakistan', 'details' => "DHA Phase 1, Islamabad\n+92 344 9121053", 'status' => 'Headquarters — Open Now'],
                ['flag' => '🇦🇪', 'city' => 'Dubai, UAE', 'details' => "Business Bay, Dubai\nGCC Operations Hub", 'status' => 'Regional Office — Active'],
                ['flag' => '🌐', 'city' => 'Remote — Global', 'details' => "Team distributed across\nEurope, North America & GCC", 'status' => 'Always Online'],
            ]
        ]]);
    }
}
