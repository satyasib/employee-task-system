<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                    ->middleware('guest')
                    ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                    ->middleware('guest');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                    ->middleware('auth')
                    ->name('logout');
					
	Route::get('/create_category', [CategoryController::class, 'create_category'])
                    ->middleware('auth')->name('create_category');
	Route::get('/create_sub_category', [SubcategoryController::class, 'create_subcategory'])
                    ->middleware('auth')->name('create_sub_category');
					
	Route::get('/create_product', [ProductController::class, 'create_product'])
                    ->middleware('auth')->name('create_product');
});
