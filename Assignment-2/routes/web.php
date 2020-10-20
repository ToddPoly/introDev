<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

// Route::get('/', 'App\Http\Controllers\PoliticianController@index');
// Route::get('/home', 'App\Http\Controllers\PoliticianController@home');
// Route::get('/display', 'App\Http\Controllers\PoliticianController@display');
// Route::post('/search', 'App\Http\Controllers\PoliticianController@process');
Route::resource('', 'App\Http\Controllers\PoliticianController');
