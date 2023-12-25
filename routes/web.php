<?php

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

 // product details route
 Route::get('product/product-details/{slug}', [ProductController::class, 'productDetails'])->name('product.product_details');



