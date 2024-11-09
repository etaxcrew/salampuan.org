<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/berita/{post:slug}', [FrontController::class, 'details'])->name('front.post.details');

Route::get('/profil', [FrontController::class, 'profil'])->name('front.profil');

/**
 * route for admin
 */

//group route with prefix "admin"
Route::prefix('admin')->group(function () {

    //group route with middleware "auth"
    Route::group(['middleware' => 'auth'], function () {

        //route dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

        //profile
        Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile.index');

        //user
        Route::resource('/user', UserController::class, ['except' => ['show'], 'as' => 'admin']);

        //category
        Route::resource('/category', CategoryController::class, ['except' => ['show'], 'as' => 'admin']);

        //post
        Route::resource('/post', PostController::class, ['except' => ['show'], 'as' => 'admin']);

        //gallery
        Route::resource('/gallery', GalleryController::class, ['except' => ['show'], 'as' => 'admin']);


    });
});
