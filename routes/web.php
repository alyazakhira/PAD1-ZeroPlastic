<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CarouselHeaderController;

Route::get('/', [GuestController::class,'index'])->name('landing-page');
Route::get('/article', [GuestController::class,'listArticle'])->name('article.list');
Route::get('/product', [GuestController::class,'listProduct'])->name('product.list');
Route::get('/article/detail/{slug}', [GuestController::class,'detailArticle'])->name('article.detail');
Route::get('/product/detail/{slug}', [GuestController::class,'detailProduct'])->name('product.detail');
Route::post('/search-result', [GuestController::class,'search'])->name('search');

// Admin
Route::get('/login', [AdminController::class,'login'])->name('login')->middleware('guest');
Route::post('/login', [AdminController::class,'authenticate'])->name('authenticate');
Route::post('/logout', [AdminController::class,'logout'])->name('logout')->middleware('auth');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/search-result-admin', [AdminController::class,'search'])->name('admin.search');

Route::get('/article/index', [ArticleController::class,'index'])->name('article.index');
Route::get('/article/show/{slug}', [ArticleController::class,'show'])->name('article.show');
Route::get('/article/create', [ArticleController::class,'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class,'store'])->name('article.store');
Route::get('/article/edit/{id}',[ArticleController::class,'edit'])->name('article.edit');
Route::post('/article/update/{id}',[ArticleController::class,'update'])->name('article.update');
Route::post('/article/delete/{id}',[ArticleController::class,'destroy'])->name('article.destroy');

Route::get('/product/index', [ProductController::class,'index'])->name('product.index');
Route::get('/product/show/{slug}', [ProductController::class,'show'])->name('product.show');
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::post('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.destroy');

Route::get('/header/index', [CarouselHeaderController::class,'index'])->name('header.index');
Route::post('/header/update', [CarouselHeaderController::class,'update'])->name('header.update');