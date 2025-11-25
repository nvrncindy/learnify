<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;

class MyCourseController extends Controller
{
    public function MyCourse(){
        $courses = Course::all();

        return view("MyCourse", compact('courses'));
    }
}
