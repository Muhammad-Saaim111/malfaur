<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProcessStep;

class ProcessStepSeeder extends Seeder
{
    public function run(): void
    {
        $steps = [
            [
                'step_number' => '01',
                'title' => 'IT Infrastructure Assessment',
                'description' => 'We conduct a comprehensive audit of your current IT setup, identifying bottlenecks, security vulnerabilities, and opportunities for scalable infrastructure improvements.',
                'deliverables' => ['Infrastructure Audit Report', 'Risk Assessment', 'Strategic IT Roadmap'],
                'icon' => '<path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>',
                'duration' => 'Weeks 1-2',
            ],
            [
                'step_number' => '02',
                'title' => 'Network & Security Architecture',
                'description' => 'Our architects design robust, secure network topologies tailored to your operational needs. We prioritize data protection, seamless connectivity, and zero-trust security frameworks.',
                'deliverables' => ['Network Topology Diagram', 'Security Framework', 'Hardware Specifications'],
                'icon' => '<path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>',
                'duration' => 'Weeks 3-4',
            ],
            [
                'step_number' => '03',
                'title' => 'System Implementation & Integration',
                'description' => 'We deploy servers, configure cloud environments, and integrate enterprise software with minimal downtime. Our staging process ensures seamless transition to new IT systems.',
                'deliverables' => ['Cloud Migration', 'Hardware Setup', 'Software Integration'],
                'icon' => '<path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>',
                'duration' => 'Weeks 5-8',
            ],
            [
                'step_number' => '04',
                'title' => 'Compliance & Performance Testing',
                'description' => 'Before full handover, we stress-test the network, perform failover drills, and ensure the entire IT ecosystem complies with industry standards (ISO, GDPR, HIPAA).',
                'deliverables' => ['Stress Test Reports', 'Compliance Certification', 'Disaster Recovery Plan'],
                'icon' => '<path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.952 11.952 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
                'duration' => 'Weeks 9-10',
            ],
            [
                'step_number' => '05',
                'title' => 'Managed IT Support & Monitoring',
                'description' => 'We provide 24/7 proactive monitoring, rapid incident response, and continuous system optimization to keep your business running smoothly without technical interruptions.',
                'deliverables' => ['24/7 Monitoring Dashboard', 'Helpdesk Support', 'Quarterly IT Reviews'],
                'icon' => '<path d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 100-6 3 3 0 000 6z"/>',
                'duration' => 'Ongoing',
            ],
        ];

        foreach ($steps as $index => $item) {
            ProcessStep::updateOrCreate(
                ['title' => $item['title']],
                array_merge($item, ['order_index' => $index])
            );
        }
    }
}
