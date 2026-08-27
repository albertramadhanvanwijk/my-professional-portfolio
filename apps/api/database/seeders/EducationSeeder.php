<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        Education::create([
            'institution' => 'Institut Pertanian Bogor',
            'degree' => 'Bachelor / D4',
            'field_of_study' => 'Software Engineering',
            'start_date' => '2020-08-01',
            'end_date' => '2025-03-01',
            'grade' => 3.00,
            'grade_scale' => 4.00,
            'description' =>
                'Final project: UI Design for Device Features in the Mobile Application "Smart Device Controlling - Smart Home" based on Design Thinking.',
        ]);
    }
}