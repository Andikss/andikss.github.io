<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/ar', function () {
    return view('details.ar');
});

Route::get('/iot', function () {
    return view('details.iot');
});

Route::get('/toeic', function () {
    return view('details.toeic');
});

Route::get('/web', function () {
    return view('details.web');
});