<?php

use App\Http\Controllers\RouteController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
// Admin page
Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    });
});


Route::get('/', [RouteController::class, 'index']);
Route::get('/test', [TestController::class, 'test']);


Route::get('/route-search/xe-khach/{fromtoPlace}',  [RouteController::class, 'routeSearch']);
