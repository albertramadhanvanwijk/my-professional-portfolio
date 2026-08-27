<?php

namespace App\Models;

use App\Models\Concerns\HasPublicId;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasUlids;
    use HasPublicId;

    protected $fillable = [
        'name',
        'issuer',
        'issued_at',
        'credential_id',
        'credential_url',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'issued_at' => 'date',
        ];
    }

}
