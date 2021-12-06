<?php

use Illuminate\Database\Seeder;

class FooterSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\FooterSetting::create([
            'footer_title' => 'Khoir Project',
            'footer_address' => 'lorem ipsum',
            'footer_phone' => '+62 812-345-6789',
            'footer_email' => 'abc@example.com',
            'footer_copyright' => '&copy; Copyright <strong><span>Khoir Project</span></strong>. All Rights Reserved',
            'footer_designed' => 'Khoir Project',
            'footer_twitter' => 'https://twitter.com/',
            'footer_facebook' => 'https://facebook.com/',
            'footer_instagram' => 'https://instagram.com/',
            'footer_youtube' => 'https://youtube.com/',
        ]);
    }
}
