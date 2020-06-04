<?php

use Illuminate\Support\Facades\Route;
use App\trips;


Route::get('/', function () {
    $data = trips::latest()->paginate(5);
    return view('public/home', compact('data'))
    ->with('i', (request()->input('page', 1) - 1) * 5);
});

Auth::routes();
Route::resource('/trips', 'TripController')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');