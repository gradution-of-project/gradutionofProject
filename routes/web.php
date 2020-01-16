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
    return view('home');
});

Route::get('/ask', function () {
  return view('ask');

});

Route::get('/comment', function () {
    return view('comment');

});
Route::get('/register', function () {
    return view('register');

});
Route::get('/adddoctor', function () {
    return view('adddoctor');
});

Route::get('/editProfile', function () {
    return view('editProfile');

});


