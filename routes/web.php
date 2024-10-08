<?php

use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\BlogControllers;
use App\Http\Controllers\Auth\InfoController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Middleware\CheckAuthGoogle;
use App\Http\Middleware\CheckLoginAdminMiddleware;
use App\Http\Controllers\admin\AuthAdminController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\PaymentResultController;
use App\Http\Controllers\PaymentController;


# Admin page
Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    })->name('admin')->middleware(AuthMiddleware::class);
    #login admin
    Route::get('/login', [AuthAdminController::class, 'index'])->name('admin.login.index')->middleware(CheckLoginAdminMiddleware::class);
    Route::post('/doLogin', [AuthAdminController::class, 'doLogin'])->name('admin.doLogin');
    Route::get('/doLogout', [AuthAdminController::class, 'doLogout'])->name('admin.doLogout');

    Route::prefix('/user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
    });

    Route::prefix('/blogs')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('admin.blogs.index');
        Route::post('/', [BlogController::class, 'store'])->name('admin.blogs.store');
        Route::get('/{id}', [BlogController::class, 'show'])->name('blogs.show');
        Route::get('/create', [BlogController::class, 'create'])->name('admin.blogs.create');
        Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
        Route::put('/{id}', [BlogController::class, 'update'])->name('admin.blogs.update');
        Route::delete('/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
        Route::get('/{id}', [BlogController::class, 'show'])->name('admin.blogs.show');
    });
    Route::get('/vexeretip', [BlogController::class, 'index'])->name('admin.vexeretip.index');
    Route::get('/news', [BlogController::class, 'index'])->name('admin.news.index');

    // Banner
    Route::prefix('/banner')->group(function () {
        Route::get('/', [ImageUploadController::class, 'showBanner'])->name('admin.banner');
        Route::post('/update', [ImageUploadController::class, 'updateBanner'])->name('admin.banner.update');
    });
});

Route::get('/', [RouteController::class, 'index'])->name('home');

Route::get('bai-viet/{slug}', [BlogControllers::class, 'show'])->name('blog.content');

Route::post('/upload-image', [ImageUploadController::class, 'store'])->name('upload.image');
Route::get('/test', [TestController::class, 'test']);

#Search route
Route::prefix('/route-search')->group(function () {
    Route::get('/xe-khach',  [RouteController::class, 'busRouteSearch'])->name('route.search.bus');
    Route::get('/tau-hoa', [RouteController::class, 'trainRouteSearch'])->name('route.search.train');
    Route::post('/sort-tau-hoa', [RouteController::class, 'trainRouteSort'])->name('route.sort.train');
});
// Bus view api
Route::post('/api/utilities',  [RouteController::class, 'busUtilitiesSearch'])->name('route.utilities');
Route::get('/api/search/xe-khach',  [RouteController::class, 'busListRouteSearch'])->name('bus.list.search');
Route::get('/api/info/xe-khach/seat-map/{tripCode}/{keyId}',  [RouteController::class, 'busSeatMap']);
Route::get('/api/info/xe-khach/{companyId}/{type}',  [RouteController::class, 'busInfo']);
Route::get('/api/info/xe-khach/cancel-policy/{tripCode}/{seatTemplateMap}',  [RouteController::class, 'busCancellationPolicy']);
// Train view api
Route::post('/api/info/tau-hoa/seat-map',  [RouteController::class, 'getSeatMap']);

Route::post('/bookingconfirmation/ve-xe-khach',  [BookingController::class, 'index']);
//payment
Route::get('/payment', [PaymentController::class, 'showPaymentPage'])->name('payment');

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

Route::get('/payment-result', [PaymentResultController::class, 'showPaymentResult'])->name('payment.result');

// loading page
Route::get('/load-content', function () {
    return view('components._loading'); // Trả về file Blade cần include
});
