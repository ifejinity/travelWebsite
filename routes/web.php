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

// homepage
Route::prefix('/zambales')->group(function () {
    Route::get('/homepage', 'zambalesController@homepage')->name('homepage');
    Route::get('/about', 'zambalesController@about')->name('about');
    Route::get('/destinations', 'zambalesController@destinations')->name('destinations');
    Route::get('/gallery', 'zambalesController@gallery')->name('gallery');
    Route::get('/contactUs', 'zambalesController@contactUs')->name('contactUs');
    Route::post('/email', 'zambalesController@sendEmail')->name('email');
});