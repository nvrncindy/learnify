<?php

use App\Http\Controllers\MyCourseController;
use App\Http\Controllers\MaterialsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/landing-page',[LandingPageController::class,'coursesList']);
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CourseController::class, 'index'])->name('home');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('/mycourse', [MyCourseController::class, 'MyCourse'])->name('MyCourse');

Route::get('/materials', [MaterialsController::class, 'Materials'])->name('Materials');


Route::get('/login', function () {
    return view('auth/login-session');
})->name('login');

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create']);
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store']);
Route::get('/login', [\App\Http\Controllers\SessionsController::class, 'create']);

Route::get('/profile', function () {
    return view('profile');
});

