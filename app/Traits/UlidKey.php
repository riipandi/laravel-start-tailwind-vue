<?php

namespace App\Traits;

use Ulid\Ulid;

trait UlidKey
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->ulid = (string) Ulid::generate();
        });
    }
}
