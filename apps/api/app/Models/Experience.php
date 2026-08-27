<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Experience extends Model
{
    use HasUlids;

    protected $fillable = [
        'company',
        'company_description',
        'position',
        'employment_type',
        'location',
        'start_date',
        'end_date',
        'is_current',
        'description',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
            'is_current' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Experience $experience) {
            $experience->public_id ??= (string) Str::ulid();
        });
    }

    public function highlights(): HasMany
    {
        return $this->hasMany(ExperienceHighlight::class);
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class)
            ->withPivot('evidence')
            ->withTimestamps();
    }

    public function getRouteKeyName(): string
    {
        return 'public_id';
    }
}