<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query();

        $search = $request->input('search');

        if ($search) {
            $query->where('title', 'LIKE', "%{$search}%")
                 
                  ->orWhere('short_description', 'LIKE', "%{$search}%");
        }

        $courses = $query->get();

        return view('coursecatalog', compact('courses', 'search'));
    }
}
