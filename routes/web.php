<?php

use App\Http\Controllers\UploadController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogController;

// Admin page
Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    });
});

// General routes
Route::get('/', [RouteController::class, 'index']);
Route::get('/route-search/{fromtoPlace}', [RouteController::class, 'routeSearch']);
Route::get('/airline_tickets', function () {
    return view('airline_tickets');
});

// Admin Blog routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
});
// Nếu là API
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
