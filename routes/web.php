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
    return view('index');
});

Route::get('/genesis-of-apg', function () {
    return view('genesis');
});

Route::get('/current-activities', function () {
    return view('current-activities');
});

Route::get('/investment-opportunities-and-tourism', function () {
    return view('investments');
});

Route::get('/culture', function () {
    return view('culture');
});

Route::get('/districts', function () {
    return view('districts');
});

Route::get('/foods', function () {
    return view('foods');
});

Route::get('/dances', function () {
    return view('dances');
});

Route::get('/chiefdoms', function () {
    return view('chiefdoms');
});

Route::get('/contact', function () {
    return view('contact');
});
