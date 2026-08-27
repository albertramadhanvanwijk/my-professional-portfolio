<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    protected $casts = [
        'available_for_work' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::creating(function (Profile $profile) {
            if (! $profile->public_id) {
                $profile->public_id = (string) Str::ulid();
            }
        });
    }

    public function getRouteKeyName(): string
    {
        return 'public_id';
    }
}