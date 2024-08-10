<?php

use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\BlogControllers;
use App\Http\Controllers\VXRController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\InfoController;


// Admin page
Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    });
});

// General routes
Route::get('/', [RouteController::class, 'index']);
Route::get('/route-search/{fromtoPlace}', [RouteController::class, 'routeSearch']);

Route::get('/', [RouteController::class, 'index'])->name('home');
Route::get('/', [RouteController::class, 'index']);
Route::get('/test', [TestController::class, 'test']);


Route::get('/airline_tickets', function () {
    return view('airline_tickets');
});
Route::prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/{id}', [BlogController::class, 'show'])->name('show'); 
});



Route::get('/', [BlogControllers::class, 'index']); // Hiển thị danh sách blogs
Route::get('/vxr/{id}', [VXRController::class, 'showVxr'])->name('vxr'); // Hiển thị chi tiết blog
// Admin Blog routes
Route::get('/', [BlogControllers::class, 'index'])->name('post.index');
Route::get('/post/{id}', [BlogControllers::class, 'show'])->name('post.show');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
});
// Nếu là API
// Route::post('/upload', [ImageUploadController::class, 'store'])->name('upload.store');
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
