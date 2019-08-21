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
    return view('welcome');
});


Route::get('/register', 'HomeController@register');
Route::get('/login', 'HomeController@Login');
Route::get('/verify', 'HomeController@Verify');
/*Route::get('/dashboard', 'HomeController@Dashboard');*/
Route::get('dashboard', [ 'as' => 'dashboard', 'uses' => 'HomeController@Dashboard']);

