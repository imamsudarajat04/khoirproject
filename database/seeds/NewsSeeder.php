<?php

use App\News;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for($i = 0; $i < 3; $i++)
        {
            $title = 'Timeline Kegiatan ' . ($i + 1);

            $data = [
                'title'        => $title,
                'slug'         => Str::slug($title),
                'description'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sapiente praesentium ab nisi repudiandae harum earum deleniti corporis fugit maxime voluptates excepturi dignissimos facilis ut aperiam magni, ea fuga labore.',
                'content'      => null,
                'publish_date' => Carbon::now()->format('Y-m-d'),
                'cover'        => null,
                'category_id'  => 1,
            ];

            News::create($data);
        }
    }
}
