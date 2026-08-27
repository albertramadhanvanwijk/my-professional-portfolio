<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    public function run(): void
    {
        Certification::create([
            'name' => 'Junior Web Developer',
            'issuer' => 'BNSP',
            'issued_at' => '2024-01-01',
            'credential_id' => null,
            'credential_url' => null,
            'description' => null,
        ]);
    }
}