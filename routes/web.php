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

// Anything with post 2 is version 2 of Pokemon

Route::get('/pokemon', 'PageController@index');
Route::get('/pokemon2', 'PageController@index2');

Route::get('/details/{id}', ['uses' => 'PageController@details']);
Route::get('/details2/{id}', ['uses' => 'PageController@details2']);

//Route::get('/pokemonCompact/{id}', ['uses' => 'PageController@compact']);
Route::get('/pokemonCompact', 'PageController@compact');