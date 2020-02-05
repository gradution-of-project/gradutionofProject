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
    $datadoctor= \App\doctor::all();
    return view('home',compact('datadoctor'));
})->name('/');


Route::get('/comment', function () {
    return view('comment');

});
Route::get('/register', function () {
    return view('register');

});
Route::get('/adddoctor', function () {
    return view('adddoctor');
});
Route::group(['middleware' => 'auth'], function () {

    Route::get('/ask', 'postController@index');
});

    Route::get('/editprofile', 'editprofileController@showprofile')->name('editprofile');
    Route::post('/editprofile', 'editprofileController@updateprofile')->name('updateprofile');
    Route::post('/registertion', 'userController@signup')->name('registertion');
    Route::post('/loginuser', 'userController@signin')->name('login');
   // Route::post('/logindoctor', 'doctorController@signin')->name('login');


Route::post('/adddoctors', 'doctorController@signup')->name('registdoctor');
//Route::post('/login', 'doctorController@signin')->name('createLogin');
Route::post('/ask', 'postController@savepost')->name('savepost');
Route::get('/logout', 'userController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
