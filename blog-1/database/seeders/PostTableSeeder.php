<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//gọi ra các lớp đang chứa đối tượng
use Faker\Factory as Faker;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Khởi tạo đối tượng Faker
        $faker = Faker::create();
        //chạy vòng lặp xác định sô sbản ghi và kiểu dữ liệu Faker
        for($i=0;$i<20;$i++) {
            Post::create([
                'title' => $faker->sentence(6, true),
                'body' => $faker->paragraphs(3,true)
            ]);
        }
    }
}
