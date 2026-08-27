<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasUlids;

    protected $fillable = [
        'title',
        'issuer',
        'date',
        'description',
        'url',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'public_id';
    }
}
