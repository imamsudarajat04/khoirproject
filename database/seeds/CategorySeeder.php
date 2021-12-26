<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
            'name' => 'Madu',
        ]);

        \App\Category::create([
            'name' => 'Florist',
        ]);

        \App\Category::create([
            'name' => 'Otomotif',
        ]);

        \App\Category::create([
            'name' => 'Expedisi',
        ]);

        \App\Category::create([
            'name' => 'Custom',
        ]);
    }
}
