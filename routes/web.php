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

    Route::get('/cabecalho', 'ShowProfile@profileId');

    //Home usuário logado
    Route::get('/home', function () {
        return view('home');
    });

    // rotinas pagina home
    Route::get('/home', 'EventsController@meusEventos');
   // Route::get('/home','EventsController@getUserEvents');

    
    // profile
    Route::get('/profile/{id}', 'ProfileController@profile');
    Route::post('/profile/{id}', 'ProfileController@alterarUsuario');
    Route::delete('/profile/{id}', 'ProfileController@removerUsuario');


    // listando todos eventos
    Route::get('/search', 'EventsController@search');

    // listando evento específico a partir do ID
    Route::get('/event/{id}', 'EventsController@eventos');

    //adicionando participante no evento
    Route::GET('/event', 'EventsController@adicionarParticipantes');

    // criando eventos e salvando eventos
    Route::get('/criandoEvento', 'EventsController@adicionandoEvento');
    Route::post('/criandoEvento', 'EventsController@salvandoEvento');
    

});
