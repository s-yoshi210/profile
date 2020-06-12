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

Route::get('/skill', function () {
    return view('skill.index');
});

Route::get('/actual_results', function () {
    return view('actual_results.index');
});

Route::get('/development', function () {
    return view('development.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});
