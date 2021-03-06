<?php

declare(strict_types=1);

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
Route::view('/lectures', 'lectures.index');
Route::get('/lectures/{lecture}', fn ($lecture) => view('lectures.lecture'));
Route::view('/explanations', 'explanations.index');
Route::get('/explanations/{explanation}', fn ($explanation) => view('explanations.explanation'));
Route::view('/video', 'video');
Route::view('/audio', 'audio');
Route::view('/library', 'library');
Route::view('/fatawa', 'fatawa');
Route::view('/contact', 'contact');
