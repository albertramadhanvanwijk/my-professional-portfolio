<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Employee E-Logbook Management Website',
            'slug' => 'employee-e-logbook-management-website',
            'short_description' =>
                'Employee e-logbook management web application.',
            'description' =>
                'A web-based employee e-logbook management project.',
            'role' => 'Web Developer',
            'status' => 'published',
            'featured' => true,
            'started_at' => '2025-06-01',
            'completed_at' => '2025-06-30',
        ]);

        Project::create([
            'title' => 'Website Information System Geography',
            'slug' => 'website-information-system-geography',
            'short_description' =>
                'Geography information system website project.',
            'description' =>
                'A web-based geography information system project.',
            'role' => 'Developer',
            'status' => 'published',
            'featured' => true,
            'started_at' => '2022-11-01',
            'completed_at' => '2022-11-30',
        ]);

        Project::create([
            'title' => 'Web Design Olivia Competition',
            'slug' => 'web-design-olivia-competition',
            'short_description' =>
                'Web design project created for the Olivia competition.',
            'description' =>
                'A web design project focused on interface and visual design.',
            'role' => 'UI/UX Designer',
            'status' => 'published',
            'featured' => false,
            'started_at' => '2022-10-01',
            'completed_at' => '2022-10-31',
        ]);

        Project::create([
            'title' => 'Web Portal UMKM using CodeIgniter',
            'slug' => 'web-portal-umkm-codeigniter',
            'short_description' =>
                'Web portal for UMKM built using CodeIgniter.',
            'description' =>
                'A web portal project for UMKM.',
            'role' => 'Web Developer',
            'status' => 'published',
            'featured' => false,
            'started_at' => '2021-08-01',
            'completed_at' => '2021-08-31',
        ]);
    }
}