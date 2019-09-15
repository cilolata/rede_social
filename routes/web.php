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

//About us
Route::get('/aboutus', function () {
    return view('aboutus');
});

//Index
Route::get('/index', function () {
    return view('index');
});

//Contact Us
Route::get('/contact', 'ContactController@contact');

//Criando eventos
Route::get('/criandoEvento', function () {
    return view('criandoEvento');
});

Auth::routes();

//Home usuário logado
Route::get('/home', function () {
    return view('home');
});
Route::middleware(['auth'])->group(function(){
    
    // listando profile a partir do ID
    Route::get('/profile/{id}', 'ProfileController@profile');

    // listando todos eventos
    Route::get('/search', 'EventsController@index');

    // listando evento específico a partir do ID
    Route::get('/event/{id}', 'EventsController@eventos');

    //Profile - completar o cadastro

});
