<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Woman;

class WomenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('women')->delete();
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Woman::create([
                'name' => $faker->name,
                'biography' => $faker->text,
                'field_of_work' => $faker->jobTitle,
                'image' => $faker->text,
                'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);
        }
    }
}
