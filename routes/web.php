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
use App\Http\Controllers\users\LogoutUserController; 
use App\Http\Controllers\users\PostUserController;
use App\Http\Controllers\users\PersonalPageUserController;
use App\Http\Controllers\users\CategoryUserController;
use App\Http\Controllers\users\typeUserController;
use App\Http\Controllers\users\detailUserController;
use App\Http\Controllers\users\BlogUserController;
use App\Http\Controllers\users\BlogDetailUserController;





use App\Http\Controllers\Admin\HomeAdminController; 
use App\Http\Controllers\Admin\CategoryManagerAdminController;
use App\Http\Controllers\Admin\PostManagementAdminController;
use App\Http\Controllers\Admin\ProductManagementAdminController;
use App\Http\Controllers\Admin\UserManagementAdminController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\listAccountController;
use App\Http\Controllers\Admin\BlogAdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\ProductTypeAdminController;





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

    Route::get('/contact.html', [ContactUserController::class, 'index']);

    Route::get('/blog.html', [BlogUserController::class, 'index']);
    Route::get('/createblog.html', [BlogUserController::class, 'create']);
    Route::post('createblog.html',[BlogUserController::class, 'postCreate']);
    Route::get('/blogdetail.html/{id}', [BlogUserController::class, 'view']);
    
});

Route::prefix('account')->group(function(){
    Route::get('/signin.html',[LoginUserController::class, 'index']);
    Route::post('/signin.html',[LoginUserController::class, 'login']);
    // Route::get('/logout.html',[LogoutUserController::class, 'index']);
    Route::get('/logout.html',[LoginUserController::class, 'logout']);

    Route::get('/registration.html',[RegisterUserController::class, 'index']);
    Route::post('/registration.html',[RegisterUserController::class, 'register']);

     Route::get('/registerout.html',[LoginUserController::class, 'registerout']);



     
});





Route::get('/species', [SpeciesUserController::class, 'index']);

Route::get('/product-type', [ProductTypeUserController::class, 'index']);

Route::get('/product', [ProductUserController::class, 'index']);


Route::get('/register', [RegisterUserController::class, 'index']);

Route::get('/login', [LoginUserController::class, 'index']);

Route::get('/post', [PostUserController::class, 'index']);

Route::get('/personal-page', [PersonalPageUserController::class, 'index']);


/**
 * Router for user pages
 */

Route::prefix('admin')->middleware('checkLoginAdmin')->group( function () {
    Route::get('/home-admin', [HomeAdminController::class, 'index']);

    Route::get('/category-manager', [CategoryManagerAdminController::class, 'index']);

    Route::get('/post-management', [PostManagementAdminController::class, 'index']);

    // Route::get('/product-management', [ProductManagementAdminController::class, 'index']);

    Route::get('/user-management', [UserManagementAdminController::class, 'index']);
   

    
    Route::get('/add.html', [AccountController::class, 'index']);
    Route::post('/add.html', [AccountController::class, 'add']);
    Route::get('/list-account', [AccountController::class, 'list']);

    Route::get('/edit/{id}',[AccountController::class,'getSua']);
    Route::post('/edit/{id}',[AccountController::class,'postSua']);
    Route::get('/deleteUses/{id}',[AccountController::class,'getXoa']);



    Route::get('/add-category.html', [CategoryAdminController::class, 'index']);
    Route::post('/add-category.html', [CategoryAdminController::class, 'add']);
    Route::get('/List-category', [CategoryAdminController::class, 'list']);

    Route::get('/edit-category/{id}',[CategoryAdminController::class,'getSua']);
    Route::post('/edit-category/{id}',[CategoryAdminController::class,'postSua']);
    Route::get('/deleteCategory/{id}',[CategoryAdminController::class,'getXoa']);




    Route::get('/add-productType.html', [ProductTypeAdminController::class, 'index']);
    Route::post('/add-productType.html', [ProductTypeAdminController::class, 'add']);
    Route::get('/product-type', [ProductTypeAdminController::class, 'list']);

    Route::get('/edit-productType/{id}',[ProductTypeAdminController::class,'getSua']);
    Route::post('/edit-productType/{id}',[ProductTypeAdminController::class,'postSua']);
    Route::get('/deleteProductType/{id}',[ProductTypeAdminController::class,'getXoa']);


    Route::get('/createblog', [BlogAdminController::class, 'index']);
    Route::post('/createblog', [BlogAdminController::class, 'create']);
    Route::get('/list-blog', [BlogAdminController::class, 'list']);

    Route::get('/createblog/{id}',[BlogAdminController::class,'getSua']);
    Route::post('/createblog/{id}',[BlogAdminController::class,'postSua']);
    Route::get('/deleteBlog/{id}',[BlogAdminController::class,'getXoa']);

    


   

    Route::get('/createProduct', [ProductAdminController::class, 'index']);
    Route::post('/createProduct', [ProductAdminController::class, 'create']);
    Route::get('/List-product', [ProductAdminController::class, 'list']);
    Route::get('/deleteProduct/{id}',[ProductAdminController::class,'getXoa']);

   

    
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