<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\User::class, function (Faker $faker) {
    $verified = [now(), null];

    $gender = ['Male', 'Female'];
    $gender = $gender[array_rand($gender)];

    $name = $faker->name(strtolower($gender));
    $uname = (strlen($name) > 10) ? substr($name, 0, 14) : $name;
    $uname = Str::slug($uname, '_');
    $email = $uname.'@'.$faker->freeEmailDomain;

    return [
        'name'              => $name,
        'gender'            => $gender,
        'username'          => $uname,
        'email'             => $email,
        'email_verified_at' => $verified[array_rand($verified)],
        'password'          => 'secret',
        'remember_token'    => Str::random(12),
        'created_at'        => $faker->dateTimeBetween('-1 years'),
        'updated_at'        => $faker->dateTimeBetween('-6 months'),
    ];
});
