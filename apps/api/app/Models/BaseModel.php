<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

abstract class BaseModel extends Model
{
    protected static function booted(): void
    {
        static::creating(function (Model $model) {
            if (
                $model->getConnection()
                    ->getSchemaBuilder()
                    ->hasColumn($model->getTable(), 'public_id')
                && empty($model->public_id)
            ) {
                $model->public_id = (string) Str::ulid();
            }
        });
    }
}
