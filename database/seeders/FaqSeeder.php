<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What IT consulting services do you offer?',
                'answer' => 'We offer comprehensive IT consulting, including cloud migrations (AWS/Azure), network design, cybersecurity audits, backup & disaster recovery solutions, and ongoing managed IT support.',
            ],
            [
                'question' => 'How do you ensure the security of our network and data?',
                'answer' => 'We implement a zero-trust security framework. This includes setting up enterprise firewalls (Cisco/Fortinet), multi-factor authentication (MFA), end-to-end data encryption, and regular vulnerability scanning to patch security flaws.',
            ],
            [
                'question' => 'Can you migrate our legacy servers to the cloud?',
                'answer' => 'Yes, cloud migration is one of our core specialties. We plan and execute seamless transitions from on-premise physical servers to secure cloud environments like AWS and Azure, ensuring minimal downtime for your business.',
            ],
            [
                'question' => 'What is your guaranteed uptime SLA?',
                'answer' => 'We guarantee a 99.9% uptime SLA for all managed networks and cloud infrastructures. Our 24/7 monitoring systems (using SolarWinds and Datadog) alert us to any anomalies, allowing us to resolve issues proactively before they cause downtime.',
            ],
            [
                'question' => 'Do you provide 24/7 technical support?',
                'answer' => 'Yes, we offer round-the-clock proactive monitoring and technical helpdesk support. Depending on your Service Level Agreement (SLA), our support desk is available via Slack, Email, and Phone to resolve critical issues anytime.',
            ],
            [
                'question' => 'How do you handle backup and disaster recovery?',
                'answer' => 'We set up automated daily backups with redundant off-site storage. In the event of a system failure, our disaster recovery protocols ensure that your business services can be restored within minutes, minimizing data loss.',
            ],
            [
                'question' => 'How do we get started with your IT consulting services?',
                'answer' => 'We begin with a complimentary initial consultation to audit your current IT infrastructure. From there, we provide a detailed strategic roadmap and hardware/software recommendations tailored to your goals.',
            ],
        ];

        foreach ($faqs as $index => $item) {
            Faq::updateOrCreate(
                ['question' => $item['question']],
                array_merge($item, ['order_index' => $index, 'category' => 'Process'])
            );
        }
    }
}
