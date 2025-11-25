<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCourseController extends Controller
{
    public function MyCourse(){
        return view("MyCourse");
    }
}
