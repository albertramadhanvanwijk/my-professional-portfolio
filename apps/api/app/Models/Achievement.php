<?php

namespace App\Models;

use App\Models\Concerns\HasPublicId;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasUlids;
    use HasPublicId;

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
            'sort_order' => 'integer',
        ];
    }
}