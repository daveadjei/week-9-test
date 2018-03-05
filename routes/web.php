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
    return view('homepage');
})->name('Homepage');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('Homepage');
Route::get('/hero/{$hero_slug}', 'HeroController@show');