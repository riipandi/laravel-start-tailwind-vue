<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UuidKey
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}
