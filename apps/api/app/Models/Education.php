<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Education extends Model
{
    use HasUlids;

    protected $table = 'education';
    protected $fillable = [
        'institution',
        'degree',
        'field_of_study',
        'start_date',
        'end_date',
        'grade',
        'grade_scale',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
            'grade' => 'decimal:2',
            'grade_scale' => 'decimal:2',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Education $education) {
            $education->public_id ??= (string) Str::ulid();
        });
    }

    public function getRouteKeyName(): string
    {
        return 'public_id';
    }
}
