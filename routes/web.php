<?php

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

use App\Http\Controllers\EducationController;

Route::get('/', function () {
   // return view('welcome');
   return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('faculty','FacultyController');
Route::get('newfaculty','FacultyController@create')->name('newfaculty');
Route::resource('major','MajorController');
Route::resource('position','AcPositionController');
Route::resource('education','EducationController');
Route::resource('prefix','PrefixController');
Route::resource('course','CourseController');
