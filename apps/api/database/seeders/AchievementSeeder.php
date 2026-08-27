<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        Achievement::create([
            'title' => '2nd Winner - Short Film Competition',
            'issuer' => null,
            'date' => '2023-01-01',
            'description' =>
                '2nd winner of a short film competition with the theme "Street Crime Prevention".',
            'url' => null,
            'sort_order' => 1,
        ]);
    }
}