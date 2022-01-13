<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\pageController;
use App\about;
use App\events;
use App\products;
use App\services;
use App\bread;
use App\household;
use App\login;
use App\vegetables;
use App\kitchen;
use App\drinks;
use App\pet;
use App\frozen;







Route::get('/',[pageController::class,'index']);
Route::get('about','App\Http\Controllers\pageController@aboutus');
Route::get('events','App\Http\Controllers\pageController@eventsus');
Route::get('products','App\Http\Controllers\pageController@products');
Route::get('services','App\Http\Controllers\pageController@services');
Route::get('bread','App\Http\Controllers\pageController@bread');
Route::get('household','App\Http\Controllers\pageController@household');
Route::get('login','App\Http\Controllers\pageController@login');
Route::get('vegetables','App\Http\Controllers\pageController@vegetables');
Route::get('kitchen','App\Http\Controllers\pageController@kitchen');
Route::get('drinks','App\Http\Controllers\pageController@drinks');
Route::get('pet','App\Http\Controllers\pageController@pet');
Route::get('frozen','App\Http\Controllers\pageController@frozen');
Route::get('bread','App\Http\Controllers\pageController@bread');

Route::get('/', function () {
    return view('welcome');

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
