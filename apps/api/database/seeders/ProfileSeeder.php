<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name' => 'Albert Ramadhan Van Wijk',

            'headline' => 'Software Engineer',

            'short_bio' =>
                'Software Engineer specializing in web development, frontend engineering, UI/UX, and building functional digital solutions.',

            'long_bio' =>
                'Bachelor of Software Engineering graduate from IPB University with over 3 years of hands-on experience in web development through freelance projects, internships, and part-time roles. Experienced in translating business and user requirements into functional frontend and backend solutions, designing intuitive user interfaces, and collaborating with development teams.',

            'location' => 'Indonesia',

            'email' => 'albertrmdhnvanwijk@gmail.com',

            // Untuk keamanan/privacy, nomor telepon tidak di expose
            // di public API pada MVP.
            'phone' => null,

            'avatar' => null,
            'resume_path' => null,

            'github_url' =>
                'https://github.com/albertramadhanvanwijk',

            'linkedin_url' =>
                'https://id.linkedin.com/in/albertramadhanvanwijk',

            'website_url' => null,

            'available_for_work' => true,
        ]);
    }
}