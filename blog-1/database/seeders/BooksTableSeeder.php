<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Author;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->delete();
        $faker = Faker::create();
        $author_ids = Author::all();
        for ($i = 0; $i <100; $i++){
            Book::create([
                'author_id' => $author_ids->random()->id,
                'title' => $faker->sentence(5),
            ]);
        }
    }
}

