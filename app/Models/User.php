<?php

namespace App\Models;

use App\Traits\UuidAsPrimary;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;
    use UuidAsPrimary;

    protected $fillable = [
        'name', 'gender', 'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'gender'            => 'enum',
        'email_verified_at' => 'datetime',
    ];

    /**
     * Encrypt password fields.
     *
     * @return string
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    /**
     * Get user first name.
     *
     * @return string
     */
    public function getFirstNameAttribute()
    {
        $parser = new \TheIconic\NameParser\Parser();
        $name = $parser->parse($this->name);

        return $name->getFirstname();
    }
}
