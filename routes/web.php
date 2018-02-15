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
	return Redirect::action('HeroiController@todos');
});

/* Route::get('/buscaTexto', function () {
    return view('texto');
});

Route::get('/buscaLista', function () {
    return view('lista');
}); */

Route::match(array('GET', 'POST'), '/procurarHeroi', 'HeroiController@procura');
Route::match(array('GET', 'POST'), '/todosHerois', 'HeroiController@todos');
Route::match(array('GET', 'POST'), '/{id?}', 'HeroiController@detalhes');
