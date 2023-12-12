<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
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
        // Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
        // Route::get('/edit/{id}', [CategoryController::class, 'edit']);
        // Route::post('/update', [CategoryController::class, 'update'])->name('update.category');
    });
});