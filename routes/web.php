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

Route::get('/pokemon', 'PageController@index');

Route::get('/details/{id}', ['uses' => 'PageController@details']);
Route::get('/details2/{id}', ['uses' => 'PageController@details2']);

//Route::get('/pokemonCompact/{id}', ['uses' => 'PageController@compact']);
Route::get('/pokemonCompact', 'PageController@compact');




Route::get('/pokemonSPA', 'PageController@index');
Route::post('/pokemonSPA', 'PageController@getDetails');