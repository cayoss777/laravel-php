<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function () {
    #return "Hola desde ruta";
    return view('admin.dashboard');
})->name('dashboard');

