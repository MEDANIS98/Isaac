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

Route::get('/', 'PagesController@index');
Route::view('/interpretations', 'interpretations');
Route::view('/lectures', 'lectures');
Route::view('/explanations', 'explanations');
Route::view('/video', 'video');
Route::view('/audio', 'audio');
Route::view('/library', 'library');
Route::view('/fatawa', 'fatawa');
