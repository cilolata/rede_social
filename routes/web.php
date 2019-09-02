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

//Index
Route::get('/index', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aboutus', 'AboutController@aboutus');

Route::get('/contact', 'ContactController@contact');

Route::get('/event', 'EventController@event');

Route::get('/profile', 'ProfileController@profile');

Route::get('/search', 'SearchController@search');