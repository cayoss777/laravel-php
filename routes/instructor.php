<?php

use Illuminate\Support\Facades\Route;



//use App\Http\Controllers\Instructor\CourseController;
use App\Http\Controllers\Instructor\CourseController;

/*
Route::get('/',function () {
    return view('instructor.dashboard');
});
*/

Route::redirect('/', '/instructor/courses'); 

Route::resource('courses',CourseController::class);

