<?php

use Illuminate\Support\Facades\Route;
// Admin page
Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    });
});

Route::get('/', function () {
    return view('index');
});

Route::get('/airline_tickets', function () {
    return view('airline_tickets');
});

