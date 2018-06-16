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

Route::get('/', 'PageController@getHome');
Route::get('/custom', 'PageController@getCustom');
Route::get('/submit', 'PageController@getSubmit');
Route::get('/login', 'PageController@getLogin');
Route::get('/register', 'PageController@getRegister');
Route::post('/submit/submit','PokemonController@submit');
Route::get('/submissions', 'PokemonController@getsubmit');
