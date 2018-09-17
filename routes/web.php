<?php

use function foo\func;

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
    return view('auth/login');
});

Route::get('/student', function () {
    return view('student');
});

Route::get('/docent', function () {
    return view('auth/login');
});

Route::get('/cijfers', 'GradesController@getGrades');

Auth::routes();

// Route::get('/docentenportaal', 'HomeController@index')->name('docentenportaal');

Route::get('/docentenportaal', 'HomeController@index')->middleware('teacher');

Route::get('/home', function (){

	return view('home');

});

