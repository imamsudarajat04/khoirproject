<?php
use App\Devision;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        for($i = 0; $i < 5; $i++) {

            $name = 'Devision ' . ($i + 1);

            $data = [
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];

            Devision::create($data);
        }
    }
}
