<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    public function run(): void
    {
        SocialLink::create([
            'platform' => 'github',
            'label' => 'GitHub',
            'url' => 'https://github.com/albertramadhanvanwijk',
            'icon' => 'github',
            'sort_order' => 1,
        ]);

        SocialLink::create([
            'platform' => 'linkedin',
            'label' => 'LinkedIn',
            'url' => 'https://id.linkedin.com/in/albertramadhanvanwijk',
            'icon' => 'linkedin',
            'sort_order' => 2,
        ]);

        SocialLink::create([
            'platform' => 'email',
            'label' => 'Email',
            'url' => 'mailto:albertrmdhnvanwijk@gmail.com',
            'icon' => 'mail',
            'sort_order' => 3,
        ]);
    }
}