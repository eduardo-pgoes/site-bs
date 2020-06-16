<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/sobre', function () {
    return view('sobre');
});



Route::get('historia/{ano}', 'PagesController@historia');

Route::middleware('auth')->prefix('dashboard/historia')->group(function (){

    Route::get('/{ano?}','PagesController@dashHistoria');

    Route::resource('temporada', 'TemporadaController');

    Route::resource('regional', 'RegionalController');

    Route::resource('foto', 'TemporadaFotoController');
});


Route::get('/apoio', 'PagesController@apoio');

Route::get('/blog', 'PagesController@blog');


Auth::routes();
