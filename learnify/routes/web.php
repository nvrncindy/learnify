<?php

use App\Http\Controllers\MyCourseController;
use App\Http\Controllers\MaterialsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/MyCourse', [MyCourseController::class, 'MyCourse'])->name('MyCourse');

Route::get('/Materials', [MaterialsController::class, 'Materials'])->name('Materials');
