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
                  ->orWhere('description', 'LIKE', "%{$search}%");
        }

        $courses = $query->get();

        return view('coursecatalog', compact('courses', 'search'));
    }


    public function create()
    {
        return view('courses.create');
    }


    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title'       => 'required',
            'slug'        => 'required|unique:courses,slug',
            'price'       => 'required|numeric',
            'description' => 'required',
            'image'       => 'nullable',
        ]);

        Course::create($attributes);

        return redirect('/courses')->with('success', 'Course created successfully!');
    }


    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $attributes = $request->validate([
            'title'       => 'required',
            'slug'        => 'required',
            'price'       => 'required|numeric',
            'description' => 'required',
            'image'       => 'nullable',
        ]);

        $course->update($attributes);

        return redirect('/courses')->with('success', 'Course updated successfully!');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect('/courses')->with('success', 'Course deleted successfully!');
    }
}
