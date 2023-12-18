<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PickuppointController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\WarehouseController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin-login', [AuthenticatedSessionController::class, 'adminLogin'])->name('admin.login');
// Route::get('/admin/home', [ProfileController::class, 'admin'])->name('admin.home')->middleware('is_admin');

// admin group route
Route::middleware('is_admin')->group(function () {
    Route::get('/admin/home', [AdminController::class, 'admin'])->name('admin.home');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


     // Category route
     Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store.category');
        Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
        Route::get('/edit/{id}', [CategoryController::class, 'edit']);
        Route::post('/update', [CategoryController::class, 'update'])->name('update.category');
       
    });

     // SubCategory route
     Route::group(['prefix' => 'subcategory'], function () {
        Route::get('/', [SubcategoryController::class, 'index'])->name('subcategory.index');
        Route::get('/create', [SubcategoryController::class, 'create'])->name('subcategory.create');
        Route::post('/store', [SubcategoryController::class, 'store'])->name('store.subcategory');
        Route::get('/delete/{id}', [SubcategoryController::class, 'destroy'])->name('subcategory.delete');
        Route::get('/edit/{id}', [SubcategoryController::class, 'edit']);
        Route::post('/update', [SubcategoryController::class, 'update'])->name('update.subcategory');
       
    });

     // Brand route
     Route::group(['prefix' => 'brand'], function () {
        Route::get('/', [BrandController::class, 'index'])->name('brand.index');
        Route::get('/create', [BrandController::class, 'create'])->name('brand.create');
        Route::post('/store', [BrandController::class, 'store'])->name('store.brand');
        Route::get('/delete/{id}', [BrandController::class, 'destroy'])->name('brand.delete');
        Route::get('/edit/{id}', [BrandController::class, 'edit']);
        Route::post('/update', [BrandController::class, 'update'])->name('update.brand');
       
    });

  // Products route 
  Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('store.product');
    
    Route::post('/subcategory', [ProductController::class, 'subcategory']); // get subcategory using ajex 
    // Route::post('/childcategory', [ProductController::class, 'childcategory']); // get subcategory using ajex 

    // featured reoute start here 
    Route::get('/not-featured/{id}', [ProductController::class, 'notFeatured']); // Not-featured route
    Route::get('/active-featured/{id}', [ProductController::class, 'activeFeatured']); // active-featured route
   // featured reoute ends here 
    // TodayDeal reoute start here 
    Route::get('/active_today_deal/{id}', [ProductController::class, 'activeTodayDeal']); // active-featured route
    Route::get('/not_today_dea/{id}', [ProductController::class, 'notTodayDeal']); // Not-featured route
    // TodayDeal reoute ends here 
    
    // TodayDeal reoute ends here 
    Route::get('/active_status/{id}', [ProductController::class, 'activeStatus']); // Active route
    Route::get('/no_tactive_status/{id}', [ProductController::class, 'notActiveStatus']); //deActive route
    // featured reoute ends here 
    Route::get('/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/update', [ProductController::class, 'update'])->name('update.product');
    Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
});

// warehouse route
Route::group(['prefix' => 'warehouse'], function () {
    Route::get('/', [WarehouseController::class, 'index'])->name('warehouse.index');
    Route::get('/create', [WarehouseController::class, 'create'])->name('warehouse.create');
    Route::post('/store', [WarehouseController::class, 'store'])->name('store.warehouse');
    Route::get('/edit/{id}', [WarehouseController::class, 'edit']);
    Route::post('/update', [WarehouseController::class, 'update'])->name('update.warehouse');
    Route::get('/delete/{id}', [WarehouseController::class, 'destroy'])->name('warehouse.delete');
});

 // Pickup-point routes
 Route::group(['prefix' => 'pickupPoint'], function () {
    Route::get('/', [PickuppointController::class, 'index'])->name('pickup_point.index');
    Route::get('/create', [PickuppointController::class, 'create'])->name('pickup_point.create');
    Route::post('/store', [PickuppointController::class, 'store'])->name('store.pickup_point');
    Route::get('/edit/{id}', [PickuppointController::class, 'edit']);
    Route::post('/update', [PickuppointController::class, 'update'])->name('update.pickup_point');
    Route::get('/delete/{id}', [PickuppointController::class, 'destroy'])->name('pickup_point.delete');
});

});