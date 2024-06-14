<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\BasketController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/catalog', [HomeController::class, 'catalog'])->name('catalog');
Route::get('/product/{product_id}', [HomeController::class, 'product'])->name('product')->middleware(['auth', 'verified']);
Route::post('/search', [HomeController::class, 'search'])->name('Search');

Route::post('/profile/edit', [ProfileController::class, 'edit_profile'])->middleware(['auth', 'verified'])->name('editProfile');
Route::get('/profile', [ProfileController::class, 'profile'])->middleware(['auth', 'verified'])->name('profile');

Route::get('/liked/add/{product_id}', [LikeController::class, 'add_liked'])->name('ToLike')->middleware(['auth', 'verified']);
Route::get('/liked/open', [LikeController::class, 'open_liked'])->name('OpenLike')->middleware(['auth', 'verified']);

Route::get('/basket/add/{product_id}', [BasketController::class, 'add_basket'])->name('ToBasket')->middleware(['auth', 'verified']);
Route::get('/basket/open', [BasketController::class, 'open_basket'])->name('OpenBasket')->middleware(['auth', 'verified']);
Route::get('/basket/delete/{basket_id}', [BasketController::class, 'delete_basket'])->name('DeleteBasket')->middleware(['auth', 'verified']);

Route::get('/admin', [AdminController::class, 'index'])->name('Admin')->middleware([IsAdmin::class]);
Route::get('/admin/delete/{product_id}', [AdminController::class, 'delete_product'])->name('DeleteProduct')->middleware([IsAdmin::class]);
Route::post('/admin/position/add', [AdminController::class, 'new_product'])->name('NewPosition')->middleware([IsAdmin::class]);
Route::get('/edit/{product_id}', [AdminController::class, 'edit_product'])->name('EditTovar')->middleware([IsAdmin::class]);
Route::post('/edit/{product_id}', [AdminController::class, 'save_edit_product'])->name('EditTovar')->middleware([IsAdmin::class]);

require __DIR__.'/auth.php';
