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

Route::get('/', 'MyController@home') -> name('home');

Route::get('/car/{id}', 'MyController@showCar') -> name('showCar');
Route::get('/pilot/{id}', 'MyController@showPilot') -> name('showPilot');


