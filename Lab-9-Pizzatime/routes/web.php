<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FormController@orderPizza');
Route::post('/pizzaDetails', 'FormController@pizzaDetails');
Route::post('/thankYou', 'FormController@thankYou');