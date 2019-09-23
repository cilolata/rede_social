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

Route::get('/index', 'EventsController@index');


//Contact Us
Route::get('/contact', 'ContactController@contact');



Auth::routes();

Route::middleware(['auth'])->group(function(){

    //Home usuário logado
    Route::get('/home', function () {
        return view('home');
    });


    Route::get('/home', 'EventsController@home');
    
    // listando profile a partir do ID
    Route::get('/profile/{id}', 'ProfileController@profile');

    // listando todos eventos
    Route::get('/search', 'EventsController@search');

    // listando evento específico a partir do ID
    Route::get('/event/{id}', 'EventsController@eventos');

    // criando eventos
    Route::get('/criandoEvento', 'EventsController@adicionandoEvento');
    Route::post('/criandoEvento', 'EventsController@salvandoEvento');
    

    //Profile - completar o cadastro

});
