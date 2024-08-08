<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;

// Admin page
Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    });
});


Route::get('/', [RouteController::class, 'index'])->name('home');

Route::get('/route-search/xe-khach/{fromtoPlace}',  [RouteController::class, 'routeSearch']);

#Login with google and phone number
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');
Route::post('/add-phone', [GoogleController::class, 'addPhone'])->name('auth.addPhone');
