<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Fundamentals of AI',
                'slug' => 'fundamentals-of-ai',
                'image' => 'Ai.png',
                'description' => 'A practical introduction to the ideas and tools behind modern AI.',
                'price' => 99000,
                'rating' => 4.8,
                'links' => 'https://www.youtube.com/embed/3-jPo2wzvdw',
            ],
            [
                'title' => 'Fundamentals of Computer Science',
                'slug' => 'cs-fundamentals',
                'image' => 'fundamentalsofcs.webp',
                'description' => 'Core building blocks of computing and algorithms.',
                'price' => 189000,
                'rating' => 4.7,
                'links' => 'https://www.youtube.com/embed/1atCCoIpSms',
            ],
            [
                'title' => 'Introduction to Web Programming',
                'slug' => 'web-programming',
                'image' => 'Web.png',
                'description' => 'Build interactive websites using HTML, CSS, and JavaScript.',
                'price' => 99000,
                'rating' => 4.6,
                'links' => 'https://www.youtube.com/embed/jbgu94Ub7sw',
            ]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
