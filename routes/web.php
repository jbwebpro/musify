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

Route::get('/','PagesController@index')->name('index');
Route::get('/songs/{song}','PagesController@song')->name('songs.details');
Route::get('/artist/{artist}','PagesController@artist')->name('artists.details');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::prefix('/dashboard')->namespace('Admin')->group(function(){
  Route::resource('/songs','SongController');
});