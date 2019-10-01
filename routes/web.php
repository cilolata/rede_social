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
        
    // profile
    Route::get('/profile/{id}', 'ProfileController@profile');
    Route::post('/profile/{id}', 'ProfileController@alterarUsuario');
    Route::delete('/profile/{id}', 'ProfileController@removerUsuario');


    // listando todos eventos
    Route::get('/search', 'EventsController@search');

    //gerando urls para cada categoria
    Route::get('/search?select_categoria=1&botao_search=', function(){
        return view ('/search');
    })->name('/ecologia');

    Route::get('search?select_categoria=2&botao_search==', function(){
        return view ('/search');
    })->name('/saude');

    Route::get('/search?select_categoria=3&botao_search=', function(){
        return view ('/search');
    })->name('/alimentacao');

    Route::get('/search?select_categoria=4&botao_search=', function(){
        return view ('/search');
    })->name('/animais');

    Route::get('/search?select_categoria=5&botao_search=', function(){
        return view ('/search');
    })->name('/cidadania');
    
<<<<<<< HEAD
=======
// profile
Route::get('/profile/{id}', 'ProfileController@profile');
Route::post('/profile/{id}', 'ProfileController@alterarUsuario');
Route::delete('/profile/{id}', 'ProfileController@removerUsuario');

// listando todos eventos
Route::get('/search', 'EventsController@search');
>>>>>>> 95fc7f57cde551d865368b4db600b78fe7b149e8

    // listando evento específico a partir do ID
    Route::get('/event/{id}', 'EventsController@eventos');

<<<<<<< HEAD
    //adicionando participante no evento
    Route::post('/event', 'ParticipantesController@createParticipantes');
    Route::get('/event', 'ParticipantesController@adicionarParticipantes');
=======
//adicionando participante no evento
Route::GET('/event/adicionarParticipantes/{id}', 'EventsController@adicionarParticipantes');
//Route::GET('/event','EventsController@showEvents' );
>>>>>>> 95fc7f57cde551d865368b4db600b78fe7b149e8

    // criando eventos e salvando eventos
    Route::get('/criandoEvento', 'EventsController@adicionandoEvento');
    Route::post('/criandoEvento', 'EventsController@salvandoEvento');
    

});
