<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Testimonial::create([
            'name' => 'Rizky',
            'position' => 'CEO',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti magnam veritatis mollitia culpa. Tempore consequuntur aliquam quod voluptatum distinctio? Eligendi, ea. Incidunt cum consectetur esse atque quaerat! Hic, consectetur rerum.',
            'avatar' => 'asset/img/testimonials/testimonials-1.jpg',
            'created_at' => Carbon::now()
        ]);

        \App\Testimonial::create([
            'name' => 'Rama',
            'position' => 'Manajer',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti magnam veritatis mollitia culpa. Tempore consequuntur aliquam quod voluptatum distinctio? Eligendi, ea. Incidunt cum consectetur esse atque quaerat! Hic, consectetur rerum.',
            'avatar' => 'asset/img/testimonials/testimonials-2jpg',
            'created_at' => Carbon::now()
        ]);

        \App\Testimonial::create([
            'name' => 'Delia',
            'position' => 'Staff Manajer',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti magnam veritatis mollitia culpa. Tempore consequuntur aliquam quod voluptatum distinctio? Eligendi, ea. Incidunt cum consectetur esse atque quaerat! Hic, consectetur rerum.',
            'avatar' => 'asset/img/testimonials/testimonials-3.jpg',
            'created_at' => Carbon::now()
        ]);

        \App\Testimonial::create([
            'name' => 'Libradelia',
            'position' => 'CEO Manajer',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti magnam veritatis mollitia culpa. Tempore consequuntur aliquam quod voluptatum distinctio? Eligendi, ea. Incidunt cum consectetur esse atque quaerat! Hic, consectetur rerum.',
            'avatar' => 'asset/img/testimonials/testimonials-4.jpg',
            'created_at' => Carbon::now()
        ]);
    }
}
