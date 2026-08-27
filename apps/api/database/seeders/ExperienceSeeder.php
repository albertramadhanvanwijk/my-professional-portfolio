<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\ExperienceHighlight;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $klh = Experience::create([
            'company' => 'Kementerian Lingkungan Hidup / Badan Pengendalian Lingkungan Hidup',
            'company_description' =>
                'Indonesian government agency responsible for environmental management, pollution control, environmental damage, waste, and climate change.',
            'position' => 'Programmer',
            'employment_type' => 'Contract',
            'location' => 'Central Jakarta',
            'start_date' => '2025-07-01',
            'end_date' => '2025-12-31',
            'is_current' => false,
            'description' =>
                'Worked on maintenance, frontend development, API integration, performance optimization, and UI/UX improvements for the Amdalnet environmental document information system.',
            'sort_order' => 1,
        ]);

        $klh->highlights()->createMany([
            [
                'title' => 'System Maintenance',
                'description' =>
                    'Performed maintenance and bug fixes on the Amdalnet environmental document information system interface.',
                'metric' => '30+ system bugs resolved',
                'sort_order' => 1,
            ],
            [
                'title' => 'VueJS Development',
                'description' =>
                    'Developed user interfaces and interactions using VueJS according to functional and non-functional requirements.',
                'sort_order' => 2,
            ],
            [
                'title' => 'API Integration',
                'description' =>
                    'Integrated frontend interfaces with APIs developed by the backend team for data synchronization.',
                'sort_order' => 3,
            ],
            [
                'title' => 'Performance Optimization',
                'description' =>
                    'Optimized application page performance for responsive access across desktop, tablet, and mobile devices.',
                'sort_order' => 4,
            ],
            [
                'title' => 'Business System Support',
                'description' =>
                    'Provided direction and learning related to business systems during branch-office visits.',
                'metric' => 'Approximately 10 visits',
                'sort_order' => 5,
            ],
        ]);

        $govokasi = Experience::create([
            'company' => 'GOVOKASI Indonesia',
            'company_description' =>
                'Industrial facilitator company focused on recruitment, training, mentoring, and placement through real-world projects.',
            'position' => 'Project Based Intern',
            'employment_type' => 'Internship',
            'location' => 'Central Jakarta',
            'start_date' => '2024-10-01',
            'end_date' => '2025-02-28',
            'is_current' => false,
            'description' =>
                'Participated in a project-based internship focused on building Videfly, a web-based educational video platform.',
            'sort_order' => 2,
        ]);

        $govokasi->highlights()->createMany([
            [
                'title' => 'ReactJS Development',
                'description' =>
                    'Designed and developed user interfaces using ReactJS with modular and reusable components.',
                'sort_order' => 1,
            ],
            [
                'title' => 'Responsive Design',
                'description' =>
                    'Implemented responsive layouts for desktop, tablet, and mobile devices.',
                'sort_order' => 2,
            ],
            [
                'title' => 'Git Collaboration',
                'description' =>
                    'Used Git and GitHub for collaboration and version management.',
                'sort_order' => 3,
            ],
            [
                'title' => 'Client Presentation',
                'description' =>
                    'Participated in weekly evaluations and project progress presentations with clients and professional mentors.',
                'sort_order' => 4,
            ],
        ]);

        $otsuka = Experience::create([
            'company' => 'PT. Amerta Indah Otsuka',
            'company_description' =>
                'Indonesian company producing and distributing health food and beverage products.',
            'position' => 'Web Developer Intern',
            'employment_type' => 'Internship',
            'location' => 'Sukabumi',
            'start_date' => '2024-02-01',
            'end_date' => '2024-05-31',
            'is_current' => false,
            'description' =>
                'Developed a goods monitoring system for the production department, including approval features and email notifications.',
            'sort_order' => 3,
        ]);

        $otsuka->highlights()->createMany([
            [
                'title' => 'Goods Monitoring System',
                'description' =>
                    'Created and completed a goods monitoring system website for the production department.',
                'sort_order' => 1,
            ],
            [
                'title' => 'Approval Features',
                'description' =>
                    'Implemented approval functionality for incoming and outgoing goods.',
                'sort_order' => 2,
            ],
            [
                'title' => 'Email Notification',
                'description' =>
                    'Created notification functionality for requests and approvals.',
                'sort_order' => 3,
            ],
            [
                'title' => 'Frontend & Backend Development',
                'description' =>
                    'Worked with Angular, TypeScript, Bootstrap, Node.js, and Express.js.',
                'sort_order' => 4,
            ],
        ]);

        $telkom = Experience::create([
            'company' => 'PT Telkom Indonesia (Persero) Tbk',
            'company_description' =>
                'Indonesian state-owned telecommunications and information technology company.',
            'position' => 'UI Designer Intern',
            'employment_type' => 'Internship',
            'location' => 'Central Jakarta',
            'start_date' => '2023-07-01',
            'end_date' => '2023-12-31',
            'is_current' => false,
            'description' =>
                'Worked on UI/UX design for Telkom Smart Home and Smart Device Controlling digital products.',
            'sort_order' => 4,
        ]);

        $telkom->highlights()->createMany([
            [
                'title' => 'Smart Home UI',
                'description' =>
                    'Designed the Telkom Super Apps interface for Smart Home and Smart Device Controlling.',
                'sort_order' => 1,
            ],
            [
                'title' => 'Product Design',
                'description' =>
                    'Translated product vision into research, sketches, wireframes, and prototypes.',
                'sort_order' => 2,
            ],
            [
                'title' => 'UI Prototyping',
                'description' =>
                    'Created high-fidelity product prototypes according to UX concepts.',
                'sort_order' => 3,
            ],
            [
                'title' => 'Design Production',
                'description' =>
                    'Created approximately 70 visual interface designs and prototypes ready for development.',
                'metric' => '70+ designs and prototypes',
                'sort_order' => 4,
            ],
        ]);
    }
}