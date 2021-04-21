<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('teacher', 'App\Http\Controllers\TeacherController');
Route::resource('student', 'App\Http\Controllers\StudentController');
Route::resource('mark', 'App\Http\Controllers\MarkController');
