<?php

use App\FooterSetting;
use App\HomepageSetting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DevisionSeeder::class);
        $this->call(FooterSettingSeeder::class);
        $this->call(HomepageSettingSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(TestimoniSeeder::class);
        $this->call(AboutSeeder::class);
    }
}
