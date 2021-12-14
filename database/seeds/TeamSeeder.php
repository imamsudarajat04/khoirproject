<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Team::create(
            [
                'name' => 'Team 1',
                'devision_id' => 1,
                'avatar' => 'team-1.jpg',
                'facebook_link' => 'https://www.facebook.com/',
                'twitter_link' => 'https://www.twitter.com/',
                'instagram_link' => 'https://www.instagram.com/',
                'linkedin_link' => 'https://www.linkedin.com/',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        );

        \App\Team::create(
            [
                'name' => 'Team 2',
                'devision_id' => 2,
                'avatar' => 'team-2.jpg',
                'facebook_link' => 'https://www.facebook.com/',
                'twitter_link' => 'https://www.twitter.com/',
                'instagram_link' => 'https://www.instagram.com/',
                'linkedin_link' => 'https://www.linkedin.com/',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        );

        \App\Team::create(
            [
                'name' => 'Team 3',
                'devision_id' => 3,
                'avatar' => 'team-3.jpg',
                'facebook_link' => 'https://www.facebook.com/',
                'twitter_link' => 'https://www.twitter.com/',
                'instagram_link' => 'https://www.instagram.com/',
                'linkedin_link' => 'https://www.linkedin.com/',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        );

        \App\Team::create(
            [
                'name' => 'Team 4',
                'devision_id' => 4,
                'avatar' => 'team-4.jpg',
                'facebook_link' => 'https://www.facebook.com/',
                'twitter_link' => 'https://www.twitter.com/',
                'instagram_link' => 'https://www.instagram.com/',
                'linkedin_link' => 'https://www.linkedin.com/',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    }
}
