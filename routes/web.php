<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::resource('/clients', ClientController::class);

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/services', function () {
    return view('services');
});
