<?php

namespace App\Models;

use App\Models\Concerns\HasPublicId;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasPublicId;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'problem',
        'solution',
        'role',
        'architecture',
        'implementation',
        'challenges',
        'result',
        'lessons_learned',
        'github_url',
        'live_url',
        'cover_image',
        'featured',
        'status',
        'started_at',
        'completed_at',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'featured' => 'boolean',
            'started_at' => 'date',
            'completed_at' => 'date',
            'published_at' => 'datetime',
        ];
    }

    public function technologies(): HasMany
    {
        return $this->hasMany(ProjectTechnology::class);
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class)
            ->withPivot('evidence')
            ->withTimestamps();
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
