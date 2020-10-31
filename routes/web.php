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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/database', function(){
	return view('database');
})->name('database');

Route::get(
	'/games', 
	'GamesController@allData'
)->name('games');

Route::post('/games/add', 
	'GamesController@add'
)->name('games_addition');

Route::get(
	'/games/{id}',
 	'GamesController@showOneGame'
 )->name('one_game_data');

Route::get(
	'/games/{id}/update',
 	'GamesController@updateGameData'
 )->name('one_game_update');

Route::get(
	'/games/{id}/delete',
 	'GamesController@deleteGameData'
 )->name('one_game_delete');

Route::post(
	'/games/{id}/update',
 	'GamesController@updateGameDataSubmit'
)->name('one_game_update_submit');

Route::post(
	'/games/search',
	'GamesController@searchGame'
)->name('one_game_search');

Route::post(
	'/games/sort',
	'GamesController@sort'
)->name('games_sort');

Route::get(
	'/developers', 
	'DevelopersController@allData'
)->name('developers');

Route::post('/developers/add', 
	'DevelopersController@add'
)->name('developers_addition');

Route::get(
	'/developers/{id}',
 	'DevelopersController@showOneDeveloper'
)->name('one_developer_data');

Route::get(
	'/developers/{id}/update',
 	'DevelopersController@updateDeveloperData'
 )->name('one_developer_update');

Route::get(
	'/developers/{id}/delete',
 	'DevelopersController@deleteDeveloperData'
)->name('one_developer_delete');

Route::post(
	'/developers/{id}/update',
 	'DevelopersController@updateDeveloperDataSubmit'
)->name('one_developer_update_submit');

Route::post(
	'/developers/search',
	'DevelopersController@searchDeveloper'
)->name('one_developer_search');

Route::post(
	'/developers/sort',
	'DevelopersController@sort'
)->name('developers_sort');


Route::get(
	'/tournirs', 
	'TournirsController@allData'
)->name('tournirs');

Route::post('/tournirs/add', 
	'TournirsController@add'
)->name('tournirs_addition');

Route::get(
	'/tournirs/{id}',
 	'TournirsController@showOneTournir'
)->name('one_tournir_data');

Route::get(
	'/tournirs/{id}/update',
 	'TournirsController@updateTournirData'
 )->name('one_tournir_update');

Route::get(
	'/tournirs/{id}/delete',
 	'TournirsController@deleteTournirData'
)->name('one_tournir_delete');

Route::post(
	'/tournirs/{id}/update',
 	'TournirsController@updateTournirDataSubmit'
)->name('one_developer_update_submit');

Route::post(
	'/tournirs/search',
	'TournirsController@searchTournir'
)->name('one_tournir_search');

Route::post(
	'/tournirs/sort',
	'TournirsController@sort'
)->name('tournirs_sort');