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

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/handover', function () {
    return view('handOver');
});

Route::get('/report', function () {
    return view('report', [
        "name" => "Wahyu Setiawan",
        "email" => "wahyu.setiawan@swiftsolutions.id",
        "image" => "swift.jpeg"

    ]);
});