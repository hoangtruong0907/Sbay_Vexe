<?php

use App\Http\Controllers\admin\loginController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\home\BlogControllers;
use App\Http\Controllers\Auth\InfoController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Middleware\CheckAuthGoogle;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\CheckLoginAdminMiddleware;

# Admin page
Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    })->name('admin')->middleware(AuthMiddleware::class);
});
Route::get('/', [BlogControllers::class, 'index'])->name('index');
Route::get('bai-viet/{slug}', [BlogControllers::class, 'show'])->name('blog.content');
Route::post('/upload-image', [ImageUploadController::class, 'store'])->name('upload.image');




Route::get('/test', [TestController::class, 'test']);


// Login Admin

Route::get('/admin/login', [loginController::class, 'index'])->name('admin.login.index')->middleware(CheckLoginAdminMiddleware::class);
Route::post('admin/doLogin', [loginController::class, 'doLogin'])->name('admin.doLogin');
Route::get('/admin/doLogout', [loginController::class, 'doLogout'])->name('admin.doLogout');

// QL User admin
Route::prefix('/admin/user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('admin.user');
    Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
});


#Search route
Route::prefix('/route-search')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    });
    #Bus route
    Route::get('/xe-khach/{fromtoPlace}',  [RouteController::class, 'busRouteSearch'])->name('route.search.bus');
    #Flight route
    Route::get('/airline_tickets', function () {
        return view('airline_tickets');
    });
});

#Train route
Route::prefix('/ve-tau-hoa')->group(function () {
    Route::get('/', [TrainController::class, 'index'])->name('train.index');
    Route::get('/{fromtoPlace}', [TrainController::class, 'search'])->name('train.search'); 
});

Route::get('/api/info/xe-khach/{companyId}/{type}',  [RouteController::class, 'busInfo']);
Route::get('/api/info/xe-khach/cancel-policy/{tripCode}/{seatTemplateMap}',  [RouteController::class, 'busCancellationPolicy']);


Route::get('/bookingconfirmation',  [BookingController::class, 'index']);

# user login
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');
Route::post('/add-phone', [GoogleController::class, 'addPhone'])->name('auth.addPhone');

#Account information
Route::middleware(['auth.google'])->prefix('/tai-khoan')->group(function () {
    Route::get('/thong-tin', [InfoController::class, 'index'])->name('auth.info');
    Route::get('/thanh-vien', [InfoController::class, 'membership'])->name('auth.membership');
    Route::get('/ve-cua-toi', [InfoController::class, 'ticket'])->name('auth.ticket');
    Route::get('/uu-dai', [InfoController::class, 'reward'])->name('auth.reward');
    Route::get('/the-cua-toi', [InfoController::class, 'card'])->name('auth.card');
    Route::get('/nhan-xet', [InfoController::class, 'review'])->name('auth.review');
    Route::get('/dang-xuat', [InfoController::class, 'logout'])->name('auth.logout');
});
