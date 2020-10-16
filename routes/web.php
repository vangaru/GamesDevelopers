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

Route::get('/games', 'GamesController@allData')->name('games');

Route::post('/games/games_addition', 'GamesController@add')->name('games_addition');

Route::get('/developers', function(){
	return view('developers');
})->name('developers');

Route::get('/tournirs', function(){
	return view('tournirs');
})->name('tournirs');

