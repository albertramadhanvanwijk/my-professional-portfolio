<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            'Frontend' => [
                'HTML',
                'CSS',
                'Bootstrap',
                'JavaScript',
                'TypeScript',
                'AngularJS',
                'VueJS',
                'ReactJS',
            ],

            'Backend' => [
                'PHP',
                'Laravel',
                'Node.js',
                'Express.js',
                'CodeIgniter',
            ],

            'Database' => [
                'MySQL',
            ],

            'Tools' => [
                'Git',
                'GitHub',
                'Visual Studio Code',
            ],

            'Design' => [
                'Figma',
                'Miro',
                'Whimsical',
                'Trello',
            ],

            'Professional' => [
                'Teamwork',
                'Time Management',
                'Communication',
                'User Analysis',
                'Brainstorming',
                'Design Thinking',
                'Problem Solving',
                'Logic',
                'Adaptability',
            ],
        ];

        $order = 1;

        foreach ($skills as $category => $items) {
            foreach ($items as $name) {
                Skill::create([
                    'name' => $name,
                    'slug' => Str::slug($name),
                    'category' => $category,
                    'description' => null,
                    'proficiency_label' => null,
                    'sort_order' => $order++,
                ]);
            }
        }
    }
}