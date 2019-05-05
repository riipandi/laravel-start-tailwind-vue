<?php

use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    public function run()
    {
        // Create default user (as superuser).
        factory(App\Models\User::class)->create([
            'name'              => 'Admin Sistem',
            'username'          => 'admin',
            'password'          => 'secret',
            'email'             => 'admin@mail.com',
            'email_verified_at' => now(),
            'remember_token'    => Str::random(12),
        ]);
    }
}
