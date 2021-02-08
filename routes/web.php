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
use App\Http\Controllers\users\CategoryUserController;
use App\Http\Controllers\users\typeUserController;
use App\Http\Controllers\users\detailUserController;


use App\Http\Controllers\Admin\HomeAdminController; 
use App\Http\Controllers\Admin\CategoryManagerAdminController;
use App\Http\Controllers\Admin\PostManagementAdminController;
use App\Http\Controllers\Admin\ProductManagementAdminController;
use App\Http\Controllers\Admin\UserManagementAdminController;


use App\Models\chung_loai;
use App\Models\san_pham;

// Route::get('/test', function(){
//     $databaseName = DB::connection()->getDatabaseName();
//     dd($databaseName);
// });

/**
 * Router for user pages
 */
Route::get('', function (){
    return redirect('home');
});

Route::prefix('')->group(function () {
    Route::get('/home', [HomeUserController::class, 'index']);

    Route::get('/category/{id}', [CategoryUserController::class, 'index']);

    Route::get('/category/kindOfNews/{id}', [KindOfNewsUserController::class, 'index']);

    Route::get('/type', [typeUserController::class, 'index']);

    // Route::get('/product/{id}', [KindOfNewsUserController::class, 'product']);

    Route::get('/detail/{id}',[detailUserController::class, 'index']);

    
});

Route::prefix('account')->group(function(){
    Route::get('/signin.html',[LoginUserController::class, 'index']);
    Route::post('/signin.html',[LoginUserController::class, 'login']);
});

Route::get('/search', [SearchUserController::class, 'index']);

Route::get('/species', [SpeciesUserController::class, 'index']);

Route::get('/product-type', [ProductTypeUserController::class, 'index']);

Route::get('/product', [ProductUserController::class, 'index']);

Route::get('/contact', [ContactUserController::class, 'index']);

Route::get('/register', [RegisterUserController::class, 'index']);

Route::get('/login', [LoginUserController::class, 'index']);

Route::get('/post', [PostUserController::class, 'index']);

Route::get('/personal-page', [PersonalPageUserController::class, 'index']);





/**
 * Router for user pages
 */

Route::prefix('admin')->group(function () {
    Route::get('/home-admin', [HomeAdminController::class, 'index']);

    Route::get('/category-manager', [CategoryManagerAdminController::class, 'index']);

    Route::get('/post-management', [PostManagementAdminController::class, 'index']);

    Route::get('/product-management', [ProductManagementAdminController::class, 'index']);

    Route::get('/user-management', [UserManagementAdminController::class, 'index']);

});


Route::get('thu',function(){
    $chungLoai = chung_loai::find(3 );
    foreach($chungLoai->loaiSanPham as $loaiSanPham)
    {
        echo $loaiSanPham->ten."</br>";
    }
});

// Route::get('thu1',function(){
//     $chungLoai = chung_loai::find(1 );
//     foreach($chungLoai->sanPham as $sanPham)
//     {
//         echo $sanPham->ten."</br>";
//     }
// });
Route::get('thu1',function(){
    foreach (chung_loai::all() as $chungLoai) {
        echo $chungLoai->ten;
    }
});
Route::get('thu2',function(){
    foreach (san_pham::all() as $sanPham) {
        echo $sanPham->ten; "</br>";
    }
});






