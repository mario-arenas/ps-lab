<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/process/consumer-perspective', function () {
    return view('process.consumer-perspective');
});

Route::get('/process/retail-perspective', function () {
    return view('process.retail-perspective');
});

Route::get('/process/client-perspective', function () {
    return view('process.client-perspective');
});

Route::get('/process', function () {
    return view('process.process');
});

Route::prefix('work')->group(function () {
    Route::get('/', function () {
        return redirect('/?scrollTo=work');
    });

    Route::get('/american-girl', function () {
        return view('work.american-girl');
    });
});