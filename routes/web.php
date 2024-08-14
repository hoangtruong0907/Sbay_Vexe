<?php

use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\home\BlogControllers;
use App\Http\Controllers\Auth\InfoController;
use App\Http\Controllers\Auth\GoogleController;



// Admin page
Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    });    
    Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/vexeretip', [BlogController::class, 'index'])->name('admin.vexeretip.index');
    Route::get('/news', [BlogController::class, 'index'])->name('admin.news.index');
    Route::post('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.admin.show');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
});


Route::get('/', [BlogControllers::class, 'index'])->name('index');

Route::post('/blog/store', [BlogControllers::class, 'store'])->name('admin.blog.store');

Route::get('/route-search/{fromtoPlace}', [RouteController::class, 'routeSearch']);
Route::get('/test', [TestController::class, 'test']);
Route::get('/airline_tickets', function () {
    return view('airline_tickets');
});


// routes/web.php
Route::get('bai-viet/{slug}', [BlogControllers::class, 'show'])->name('blog.content');





// Nếu là API

Route::post('/upload-image', [ImageUploadController::class, 'store'])->name('upload.image');


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
