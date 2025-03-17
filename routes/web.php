<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/process/consumer-perspective', function () {
    return view('consumer-perspective');
});

Route::get('/process/retail-perspective', function () {
    return view('retail-perspective');
});

Route::get('/process/client-perspective', function () {
    return view('client-perspective');
});

Route::get('/process', function () {
    return view('process');
});