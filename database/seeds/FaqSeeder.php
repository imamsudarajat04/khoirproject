<?php

use App\Faq;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        for($i = 0; $i < 4; $i++) {

            $name = 'Pertanyaan ' . ($i + 1) . '?';

            $data = [
                'question' => $name,
                'answer' => 'Jawaban ' . ($i + 1) . '.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];

            Faq::create($data);
        }
    }
}
