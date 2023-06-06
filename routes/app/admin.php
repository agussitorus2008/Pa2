<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ChartsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SejarahController;
use App\Http\Controllers\Admin\NotificationController;


Route::group(['domain' => ''], function () {

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::redirect('/', 'dashboard', 301);


        Route::get('chart', [ChartsController::class, 'index'])->name('chart');

        //Create Product
        Route::get('main', [ProductController::class, 'index'])->name('main');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('create', [ProductController::class, 'store'])->name('store');
        Route::get('show/{id}', [ProductController::class, 'show'])->name('show');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::patch('update/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');

        //Profile
        Route::get('mainprofile', [ProfileController::class, 'index'])->name('mainprofile');
        Route::get('editprofile', [ProfileController::class, 'edit'])->name('editprofile');
        Route::patch('updateprofile/{id}', [ProfileController::class, 'update'])->name('updateprofile');

        //order
        Route::get('order', [OrderController::class, 'index'])->name('order.index');
        Route::get('order/pdf', [OrderController::class, 'pdf'])->name('order.pdf');
        Route::get('order/excel', [OrderController::class, 'excel'])->name('order.excel');
        Route::get('order/downloadexcel', [OrderController::class, 'downloadexcel'])->name('order.downloadexcel');
        Route::get('order/{order}', [OrderController::class, 'show'])->name('order.show');
        Route::patch('order/accept/{order}', [OrderController::class, 'accept'])->name('order.accept');
        Route::patch('order/reject/{order}', [OrderController::class, 'reject'])->name('order.reject');

        // CHAT
        Route::get('chat', [ChatController::class, 'index'])->name('chat.index');
        Route::get('chat/{id}', [ChatController::class, 'show'])->name('chat.show');
        Route::post('chat', [ChatController::class, 'store'])->name('chat.send');


        // NOTIFICATION
        Route::get('counter', [NotificationController::class, 'counter'])->name('counter_notif');
        Route::get('notification', [NotificationController::class, 'index'])->name('notification.index');

        //Sejarah
        Route::resource('sejarah', SejarahController::class);
    });
});
