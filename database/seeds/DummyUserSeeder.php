<?php

use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int) $this->command->ask('How many users do you need ?', 10);

        $this->command->info("Creating {$count} users ...");

        factory('App\Models\User', $count)->create();

        $this->command->info('Dummy users created!');
    }
}
