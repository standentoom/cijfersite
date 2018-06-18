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

Route::get('/fun/hi/{id}', 'FunController@Hi');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('sendemail', function () {

    $data = array(
        'name' => "Learning Laravel",
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('cijfersssite@gmail.com', 'Learning Laravel');

        $message->to('toomstan@gmail.com.com')->subject('Learning Laravel test email');

    });

    return "Your email has been sent successfully";

});
