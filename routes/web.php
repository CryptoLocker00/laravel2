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

//Route::get('/hello', function () {
//    return 'Hello, Mercy Please';
//});

Route::get('/hello', 'Hello@index');
Route::get('/hello/{name}', 'Hello@show'); //show name hello

Route::get('/', 'Front@index'); //public

Route::get('/displayDatabase', 'displayDatabaseController@index');

Route::get('/login', 'Login@showlogin'); //show login form
Route::post('/login','Login@index'); //process login form

//Route::get('/index', [
//    'middleware' => 'auth',
//    'uses' => 'Login@index'
//]);




