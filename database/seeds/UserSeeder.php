<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Admin',
            'email' => 'admin@shop.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'created_at' => Carbon::now()
        ]);

        \App\User::create([
            'name' => 'Writer',
            'email' => 'writer@shop.com',
            'password' => bcrypt('writer'),
            'role' => 'writer',
            'created_at' => Carbon::now()
        ]);
    }
}
