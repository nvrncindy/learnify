<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Faker\factory as faker;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $faker = faker::create('id_ID');
        for ($i=0; $i < 30 ; $i++) {
            \DB::table('courses')->insert([
            'title' => $faker->sentence(2),
            'slug' => $faker->sentence(2),
            'image' => 'img',
            'description' => $faker->sentence(4),
            'price' => $faker->randomNumber(6),
            'rating' => $faker->randomFloat(2, 0,5),
            ]);
        }
    }
}
