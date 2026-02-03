<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

//use App\Http\Controllers\Instructor\CourseController;
use App\Http\Controllers\Instructor\CourseController;

/*
Route::get('/',function () {
    return view('instructor.dashboard');
});
*/

Route::redirect('/', '/instructor/courses')
    ->name('home'); 

Route::resource('courses',CourseController::class);

