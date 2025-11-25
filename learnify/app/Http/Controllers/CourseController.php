<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $courses = collect([
            (object)[
                'id' => 1,
                'title' => 'Fundamentals of AI',
                'rating' => 4.8,
                'price' => 99000,
                'short_description' => 'A practical introduction to the ideas and tools behind modern AI.',
                'image' => 'FundamentalsofAI.jfif',
            ],
            (object)[
                'id' => 2,
                'title' => 'Fundamentals of Computer Science',
                'rating' => 4.7,
                'price' => 189000,
                'short_description' => 'Core building blocks of computing and algorithms.',
                'image' => 'fundamentalsofCS.webp',
            ],
            (object)[
                'id' => 3,
                'title' => 'Introduction to Web Programming',
                'rating' => 4.6,
                'price' => 99000,
                'short_description' => 'Build interactive websites using HTML, CSS, and JavaScript.',
                'image' => 'webdev.png',
            ],
        ]);

        if ($search) {
            $courses = $courses->filter(function ($course) use ($search) {
                return str_contains(strtolower($course->title), strtolower($search)) ||
                       str_contains(strtolower($course->short_description), strtolower($search));
            });
        }

        return view('coursecatalog', [
            'courses' => $courses,
            'search' => $search
        ]);
    }
}
