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

Route::get('/', function () {
   // return view('welcome');
   return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('faculty','FacultyController@index')->name('faculty');
Route::get('newfaculty','FacultyController@create')->name('newfaculty');
//Route::get('create','MajorController@create')->name('create');
