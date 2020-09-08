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
    return view('spin_rolls');
})->name('principal');

Auth::routes();

Route::get('/usuario', 'HomeController@index')->name('home');

Route::get('/enviarnumero', 'RodaController@girar')->name('girar');

Route::get('/howtoplay', 'RodaController@howtoplay')->name('howtoplay');

Route::get('/answers', 'RodaController@answers')->name('answers');