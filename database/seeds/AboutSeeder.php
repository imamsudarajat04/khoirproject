<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\About::create([
            'title' => 'Enim quis est voluptatibus aliquid consequatur fugiat',
            'subtitle' => 'Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.',
            'title_point_one' => 'Lorem Ipsum',
            'subtitle_point_one' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
            'icon_point_one' => 'bx bx-fingerprint',
            'title_point_two' => 'Nemo Enim',
            'subtitle_point_two' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque',
            'icon_point_two' => 'bx bx-gift',
            'title_point_three' => 'Dine Pad',
            'subtitle_point_three' => 'Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis',
            'icon_point_three' => 'bx bx-atom',
        ]);
    }
}
