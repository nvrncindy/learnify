<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

        return view('course.create');
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
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $attributes = $request->validate([
            'title'       => 'required',
            'slug'        => 'required|unique:courses,slug,' . $course->id,
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

    public function apply(Course $course)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        if ($user->courses->contains($course->id)) {
            return back()->with('error', 'You are already enrolled in this course.');
        }

        $user->courses()->attach($course->id);

        return back()->with('success', 'You have successfully applied for this course.');
    }
}
