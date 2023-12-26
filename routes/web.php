<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('/login', function () {
    // return redirect()->to('');
    return redirect()->back();
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/logout', [IndexController::class, 'logout'])->name('customer.logout');
Route::get('/wishlist', [IndexController::class, 'wishlist'])->name('wishlist');
Route::get('/products', [IndexController::class, 'products'])->name('products');
Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');



Route::group(['prefix' => 'product'], function () {
    // product details route
    Route::get('product-details/{slug}', [ProductController::class, 'productDetails'])->name('product.product_details');
    // product quick view route 
    Route::get('product_quick_view/{id}', [ProductController::class, 'productQuickView']);
    // wishlist route 
    Route::get('add/wishlist/{id}', [ProductController::class, 'AddWishlist'])->name('add.wishlist');
    Route::get('add/cart/{id}', [CartController::class, 'AddToCart']);
});
