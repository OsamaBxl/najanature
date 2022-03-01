<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ProductCategoriesController;
use App\Http\Controllers\Frontend\FrontendController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Auth::routes(['verify' => true]);

    Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
    Route::get('/cart', [FrontendController::class, 'cart'])->name('frontend.cart');
    Route::get('/checkout', [FrontendController::class, 'checkout'])->name('frontend.checkout');
    Route::get('/detail', [FrontendController::class, 'detail'])->name('frontend.detail');
    Route::get('/shop', [FrontendController::class, 'shop'])->name('frontend.shop');

    Route::get('/admin/login', [BackendController::class, 'login'])->name('backend.login');
    Route::get('/admin/index', [BackendController::class, 'index'])->name('backend.index');
    Route::get('/admin/forgotPassword', [BackendController::class, 'forgot_password'])->name('backend.forgot_password');
    Route::get('/admin/register', [BackendController::class, 'register'])->name('backend.register');

    ///////////////////////////////////////////////////

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

        Route::group(['middleware' => 'guest'], function () {
            Route::get('/login', [BackendController::class, 'login'])->name('login');
            Route::get('/forgotPassword', [BackendController::class, 'forgot_password'])->name('forgot_password');
        });

        Route::group(['middleware' => ['roles', 'role:admin|supervisor']], function () {
            Route::get('/', [BackendController::class, 'index'])->name('index_route');
            Route::get('/index', [BackendController::class, 'index'])->name('index');

            Route::resource('product_categories', ProductCategoriesController::class);
        });
    });
});