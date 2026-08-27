<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ProfileSeeder::class,
            ExperienceSeeder::class,
            EducationSeeder::class,
            SkillSeeder::class,
            ProjectSeeder::class,
            CertificationSeeder::class,
            AchievementSeeder::class,
            ArticleSeeder::class,
            SocialLinkSeeder::class,
        ]);
    }
}