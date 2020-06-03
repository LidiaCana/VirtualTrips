<?php

use Illuminate\Support\Facades\Route;
use App\trips;


Route::get('/', function () {

 return view('welcome');
});

Auth::routes();

Route::resource('/trips', 'TripController')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', 'HomeController@show')->name('visitor');