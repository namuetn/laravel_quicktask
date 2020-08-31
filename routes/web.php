<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');
    Route::get('/', 'HomeController@welcome')->name('dasboard');
    Route::get('home', 'HomeController@index');
    Auth::routes();
    Route::resource('songs', 'SongController');
    Route::resource('singers', 'SingerController');
});
