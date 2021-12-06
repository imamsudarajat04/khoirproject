<?php

use Illuminate\Database\Seeder;

class HomepageSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\HomepageSetting::create([
            'header_name' => 'Khoir Project',
            'header_title' => 'Selamat Datang di Khoir Project',
            'header_subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
            'header_button_text' => 'Ayo Mulai',
            'header_email' => 'abc@example.com',
            'header_phone' => '+62 812-345-6789',
        ]);
    }
}
