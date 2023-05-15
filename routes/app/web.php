<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\ChatController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\CheckoutController;
use App\Http\Controllers\web\DashboardController;
use App\Http\Controllers\Web\NotificationController;
use App\Http\Controllers\Web\RegionalController;



Route::group(['domain' => ''], function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
    Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');


    Route::prefix('')->name('web.')->group(function () {
        Route::redirect('/', 'dashboard', 301);
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        //Profile
        Route::get('mainprofile',[ProfileController::class, 'index'])->name('mainprofile');
        Route::get('editprofile',[ProfileController::class, 'edit'])->name('editprofile');
        Route::patch('updateprofile/{id}',[ProfileController::class, 'update'])->name('updateprofile');

        // Menu
        Route::resource('product', ProductController::class);


        // CART
        Route::get('counter_cart', [CartController::class, 'notif'])->name('counter_cart');
        Route::get('cart', [CartController::class, 'index'])->name('cart.index');
        Route::post('cart/add', [CartController::class, 'store'])->name('cart.add');
        Route::patch('cart/increase/{cart}', [CartController::class, 'increase'])->name('cart.increase');
        Route::patch('cart/decrease/{cart}', [CartController::class, 'decrease'])->name('cart.decrease');
        Route::patch('cart/update/{cart}', [CartController::class, 'update'])->name('cart.update');
        Route::delete('cart/delete/{cart}', [CartController::class, 'destroy'])->name('cart.delete');

        // CHAT
        Route::get('chat', [ChatController::class, 'index'])->name('chat.index');
        Route::post('chat', [ChatController::class, 'store'])->name('chat.send');

        // NOTIFICATION
        Route::get('counter', [NotificationController::class, 'counter'])->name('counter_notif');
        Route::get('notification', [NotificationController::class, 'index'])->name('notification.index');

        // Checkout
        Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
        Route::post('check', [CheckoutController::class, 'check'])->name('check');
        Route::post('checkout', [CheckoutController::class, 'checkout'])->name('checkout');
        Route::get('checkout/{id}', [CheckoutController::class, 'checkout_detail'])->name('checkout.detail');

        // ORDER
        Route::get('order', [OrderController::class, 'index'])->name('order.index');
        Route::get('order/{order}', [OrderController::class, 'show'])->name('order.show');

        // REGIONAL
        Route::post('regional/province', [RegionalController::class, 'province'])->name('regional.province');
        Route::post('regional/city', [RegionalController::class, 'city'])->name('regional.city');
        Route::post('regional/subdistrict', [RegionalController::class, 'subdistrict'])->name('regional.subdistrict');

    });
});
