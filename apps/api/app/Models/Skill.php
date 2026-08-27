<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasUlids;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'description',
        'proficiency_label',
        'sort_order',
    ];

    public function experiences(): BelongsToMany
    {
        return $this->belongsToMany(Experience::class)
            ->withPivot('evidence')
            ->withTimestamps();
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class)
            ->withPivot('evidence')
            ->withTimestamps();
    }

    public function getRouteKeyName(): string
    {
        return 'public_id';
    }
}
