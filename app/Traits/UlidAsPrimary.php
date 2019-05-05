<?php

namespace App\Traits;

use Ulid\Ulid;

trait UlidAsPrimary
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->incrementing = false;
            $model->keyType = 'string';
            $model->{$model->getKeyName()} = (string) Ulid::generate();
        });
    }
}
