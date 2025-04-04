<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\AboutUsController;
use App\Http\Controllers\front\BlogController;
use App\Http\Controllers\front\ContactUsController;
use App\Http\Controllers\front\FaqsController;
use App\Http\Controllers\front\ProductController;





Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/detail/{id}', [BlogController::class, 'detail'])->name('blog.detail');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::get('/faqs', [FaqsController::class, 'index'])->name('faqs');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('/products/compare', [ProductController::class, 'compare'])->name('product.compare');
Route::get('/products/wishlist', [ProductController::class, 'wishlist'])->name('product.wishlist');
