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

Route::get('/games', function(){
	return view('games');
})->name('games');

Route::get('/developers', function(){
	return view('developers');
})->name('developers');

Route::get('/tournirs', function(){
	return view('tournirs');
})->name('tournirs');

Route::get('/games/games_table', function(){
	return view('games_table');
})->name('games_table');

Route::get('/developers/developers_table', function(){
	return view('developers_table');
})->name('developers_table');

Route::get('/tournirs/torunirs_table', function(){
	return view('tournirs_table');
})->name('tournirs_table');
