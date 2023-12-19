<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Resources Routes
|--------------------------------------------------------------------------
|
| Here is where you can register RESTful routes for your application.
| Theseroutes are loaded by the RouteServiceProvider and all of them 
| will be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('students', StudentController::class)->parameters(['students' => 'student:uuid']);