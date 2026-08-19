<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            [
                'name' => 'Sarah Connor',
                'first_name' => 'Sarah',
                'last_name' => 'Connor',
                'email' => 'sarah@hexafume.com',
                'url_slug' => 'sarah-connor',
                'initials' => 'SC',
                'title' => 'Chief Executive Officer',
                'dept' => 'leadership',
                'dept_label' => 'Leadership',
                'exp' => '15+ Years',
                'bio' => 'Visionary leader with a passion for transformative digital solutions.',
                'skills' => ['Strategy', 'Leadership', 'Innovation'],
                'show_on_team' => true,
            ],
            [
                'name' => 'John Smith',
                'first_name' => 'John',
                'last_name' => 'Smith',
                'email' => 'john@hexafume.com',
                'url_slug' => 'john-smith',
                'initials' => 'JS',
                'title' => 'Lead Engineer',
                'dept' => 'engineering',
                'dept_label' => 'Engineering',
                'exp' => '10+ Years',
                'bio' => 'Expert in AI architectures and scalable backend systems.',
                'skills' => ['Python', 'Go', 'System Design'],
                'show_on_team' => true,
            ],
            [
                'name' => 'Alice Doe',
                'first_name' => 'Alice',
                'last_name' => 'Doe',
                'email' => 'alice@hexafume.com',
                'url_slug' => 'alice-doe',
                'initials' => 'AD',
                'title' => 'Product Designer',
                'dept' => 'design',
                'dept_label' => 'Design & UX',
                'exp' => '8+ Years',
                'bio' => 'Crafting intuitive user experiences that bridge form and function.',
                'skills' => ['Figma', 'UI/UX', 'Prototyping'],
                'show_on_team' => true,
            ],
            [
                'name' => 'Usman Malik',
                'first_name' => 'Usman',
                'last_name' => 'Malik',
                'email' => 'usman@malfaur.com',
                'url_slug' => 'usman-malik',
                'initials' => 'UM',
                'title' => 'Founder & Principal Cyber Resilience Advisor',
                'dept' => 'leadership',
                'dept_label' => 'Leadership',
                'exp' => '15+ Years',
                'bio' => 'Founder and Principal Cyber Resilience Advisor directing strategic direction and guidance for banks, financial entities, and critical industries.',
                'skills' => ['Cyber Resilience', 'Advisory', 'Strategy', 'Risk Management'],
                'show_on_team' => true,
                'photo_path' => 'images/team/usman-malik.jpeg',
            ],
            [
                'name' => 'Shahzad Hamid',
                'first_name' => 'Shahzad',
                'last_name' => 'Hamid',
                'email' => 'shahzad@malfaur.com',
                'url_slug' => 'shahzad-hamid',
                'initials' => 'SH',
                'title' => 'Senior Technology & Digital Transformation Advisor',
                'dept' => 'advisory',
                'dept_label' => 'Advisory',
                'exp' => '20+ Years',
                'bio' => 'Senior technology leader advising enterprises on digital transformation, cloud migrations, scalable architecture, and transition frameworks.',
                'skills' => ['Cloud Migration', 'Digital Transformation', 'Advisory', 'Enterprise Tech'],
                'show_on_team' => true,
                'photo_path' => 'images/team/shahzad-hamid.jpeg',
            ]
        ];

        foreach ($members as $member) {
            TeamMember::updateOrCreate(
                ['url_slug' => $member['url_slug']],
                $member
            );
        }
    }
}
