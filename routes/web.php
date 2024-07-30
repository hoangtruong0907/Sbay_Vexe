<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/airline_tickets', function () {
    return view('airline_tickets');
});

