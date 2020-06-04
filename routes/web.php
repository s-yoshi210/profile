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
    return view('profile');
});

Route::get('/skill', function () {
    return view('skill');
});

Route::get('/actual_results', function () {
    return view('actual_results');
});

Route::get('/development', function () {
    return view('development');
});

Route::get('/contact', function () {
    return view('contact');
});
