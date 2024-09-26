<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/product/details/{id}', [UserController::class, 'detailsproduct'])->name('product.show');

Route::get('admin/', [AdminController::class, 'login'])->name('login');


Route::post('admin/login', [AdminController::class, 'postLogin'])->name('admin.login.submit');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
    Route::resource('products', ProductController::class); 
});
