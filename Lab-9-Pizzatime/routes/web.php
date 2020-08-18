<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FormController@orderPizza');
Route::post('/orderDetails', 'FormController@orderDetails');
Route::post('/thankYou', 'FormController@pizzaDetails');

// Route::get('/', function () {
//     return view('welcome');
// });


