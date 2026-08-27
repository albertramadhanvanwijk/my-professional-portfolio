<?php

namespace App\Models;

use App\Models\Concerns\HasPublicId;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasUlids;
    use HasPublicId;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'description',
        'proficiency_label',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
        ];
    }

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
}