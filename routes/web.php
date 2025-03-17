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

    Route::get('/food-network', function () {
        return view('work.food-network');
    });

    Route::get('/skip-hop', function () {
        return view('work.skip-hop');
    });

    Route::get('/better-homes-and-gardens', function () {
        return view('work.better-homes-and-gardens');
    });

    Route::get('/flexees-by-maidenform', function () {
        return view('work.flexees-by-maidenform');
    });

    Route::get('/target-halloween', function () {
        return view('work.target-halloween');
    });

    Route::get('/sesame-street', function () {
        return view('work.sesame-street');
    });

    Route::get('/walmart-holiday-time', function () {
        return view('work.walmart-holiday-time');
    });

    Route::get('/american-greetings', function () {
        return view('work.american-greetings');
    });

    Route::get('/american-girl-girl-of-the-year', function () {
        return view('work.american-girl-girl-of-the-year');
    });

    Route::get('/fabio-viviani', function () {
        return view('work.fabio-viviani');
    });

    Route::get('/rolling-stones', function () {
        return view('work.rolling-stones');
    });

    Route::get('/discovery-consumer-products', function () {
        return view('work.discovery-consumer-products');
    });

    Route::get('/nfl', function () {
        return view('work.nfl');
    });

    Route::get('/mike-rowe-works', function () {
        return view('work.mike-rowe-works');
    });

    Route::get('/french-toast', function () {
        return view('work.french-toast');
    });

    Route::get('/discovery-destinations', function () {
        return view('work.discovery-destinations');
    });
});