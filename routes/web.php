<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\InfoController;

// Admin page
Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    });
});


Route::get('/', [RouteController::class, 'index'])->name('home');
Route::get('/', [RouteController::class, 'index']);
Route::get('/test', [TestController::class, 'test']);


Route::get('/airline_tickets', function () {
    return view('airline_tickets');
});

Route::get('/bookingconfirmation',  [BookingController::class, 'index']);
Route::get('/route-search/xe-khach/{fromtoPlace}',  [RouteController::class, 'routeSearch']);

#Login with google and add phone number
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');
Route::post('/add-phone', [GoogleController::class, 'addPhone'])->name('auth.addPhone');
#Account information
Route::get('tai-khoan/thong-tin', [InfoController::class, 'index'])->name('auth.info');
Route::get('tai-khoan/thanh-vien', [InfoController::class, 'membership'])->name('auth.membership');
Route::get('tai-khoan/ve-cua-toi', [InfoController::class, 'ticket'])->name('auth.ticket');
Route::get('tai-khoan/uu-dai', [InfoController::class, 'reward'])->name('auth.reward');
Route::get('tai-khoan/the-cua-toi', [InfoController::class, 'card'])->name('auth.card');
Route::get('tai-khoan/nhan-xet', [InfoController::class, 'review'])->name('auth.review');
Route::get('tai-khoan/dang-xuat', [InfoController::class, 'logout'])->name('auth.logout');
