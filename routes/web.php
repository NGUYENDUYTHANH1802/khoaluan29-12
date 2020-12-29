<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users\HomeUserController;
use App\Http\Controllers\users\SearchUserController;
use App\Http\Controllers\users\SpeciesUserController;
use App\Http\Controllers\users\ProductTypeUserController;
use App\Http\Controllers\users\ProductUserController;
use App\Http\Controllers\users\ContactUserController;
use App\Http\Controllers\users\RegisterUserController;
use App\Http\Controllers\users\LoginUserController; 
use App\Http\Controllers\users\PostUserController;
use App\Http\Controllers\users\PersonalPageUserController;

use App\Http\Controllers\Admin\HomeAdminController; 
use App\Http\Controllers\Admin\CategoryManagerAdminController;
use App\Http\Controllers\Admin\PostManagementAdminController;
use App\Http\Controllers\Admin\ProductManagementAdminController;
use App\Http\Controllers\Admin\UserManagementAdminController;

Route::get('/home', [HomeUserController::class, 'index']);

Route::get('/search', [SearchUserController::class, 'index']);

Route::get('/species', [SpeciesUserController::class, 'index']);

Route::get('/product-type', [ProductTypeUserController::class, 'index']);

Route::get('/product', [ProductUserController::class, 'index']);

Route::get('/contact', [ContactUserController::class, 'index']);

Route::get('/register', [RegisterUserController::class, 'index']);

Route::get('/login', [LoginUserController::class, 'index']);

Route::get('/post', [PostUserController::class, 'index']);

Route::get('/personal-page', [PersonalPageUserController::class, 'index']);

// ------ Admin----------

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/home-admin', [HomeAdminController::class, 'index']);

    Route::get('/category-manager', [CategoryManagerAdminController::class, 'index']);

    Route::get('/post-management', [PostManagementAdminController::class, 'index']);

    Route::get('/product-management', [ProductManagementAdminController::class, 'index']);

    Route::get('/user-management', [UserManagementAdminController::class, 'index']);

});









