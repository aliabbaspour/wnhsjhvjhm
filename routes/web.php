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

Route::match(['get', 'post'],'/', 'RegisterController@index')->name('register');
Route::post('/', 'RegisterController@register_to_verify')->name('register_to_verify');

Route::match(['get', 'post'],'/verify', 'RegisterController@verify')->name('verify');
Route::post('/verify', 'RegisterController@verify_to_startup')->name('verify_to_startup');

Route::match(['get', 'post'],'/startup', 'RegisterController@startup')->name('startup');


Route::get('/team', function () {
    return view('register.team');
});

