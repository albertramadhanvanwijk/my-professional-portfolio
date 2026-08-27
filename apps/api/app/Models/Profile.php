<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasUlids;

    protected $fillable = [
        'name',
        'headline',
        'short_bio',
        'long_bio',
        'location',
        'email',
        'phone',
        'avatar',
        'resume_path',
        'github_url',
        'linkedin_url',
        'website_url',
        'available_for_work',
    ];

    public function getRouteKeyName(): string
    {
        return 'public_id';
    }
}
