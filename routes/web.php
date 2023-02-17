<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ZepaMemberController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BankSampahController;
use App\Http\Controllers\MBankSampahController;
use App\Http\Controllers\CarouselHeaderController;

// Guest
Route::get('/', [GuestController::class,'index'])->name('landing-page');
Route::get('/article', [GuestController::class,'listArticle'])->name('article.list');
Route::get('/product', [GuestController::class,'listProduct'])->name('product.list');
Route::get('/article/detail/{slug}', [GuestController::class,'detailArticle'])->name('article.detail');
Route::get('/product/detail/{slug}', [GuestController::class,'detailProduct'])->name('product.detail');
Route::post('/search-result', [GuestController::class,'search'])->name('search');
Route::post('/subscribe', [GuestController::class,'subscribe'])->name('subscribe');

// Member
Route::post('/member-register', [MemberController::class,'register'])->name('member.register')->middleware('guest');
Route::get('/member-login', [MemberController::class,'login'])->name('member.login')->middleware('guest');
Route::post('/member-login', [MemberController::class,'authenticate'])->name('member.authenticate');
Route::post('/member-logout', [MemberController::class,'logout'])->name('member.logout')->middleware('auth');
Route::get('/member-dashboard', [MemberController::class, 'index'])->name('member.dashboard')->middleware('auth');
Route::get('/member-content-creator', [MemberController::class, 'contentCreator'])->name('member.cc')->middleware('auth');
Route::get('/member-admin-bank-sampah/{id}', [MemberController::class, 'adminBankSampah'])->name('member.abs')->middleware('auth');
Route::post('/member-content-creator', [MemberController::class, 'ccAgree'])->name('member.cc.a')->middleware('auth');
// Route::post('/search-result-member', [MemberController::class,'search'])->name('member.search');

Route::get('/m-article/index/{id}', [MArticleController::class,'index'])->name('m-article.index');
Route::get('/m-article/show/{slug}', [MArticleController::class,'show'])->name('m-article.show');
Route::get('/m-article/create', [MArticleController::class,'create'])->name('m-article.create');
Route::post('/m-article/store', [MArticleController::class,'store'])->name('m-article.store');
Route::get('/m-article/edit/{id}',[MArticleController::class,'edit'])->name('m-article.edit');
Route::post('/m-article/update/{id}',[MArticleController::class,'update'])->name('m-article.update');
Route::post('/m-article/delete/{id}',[MArticleController::class,'destroy'])->name('m-article.destroy');

Route::get('/m-bank/index/{id}', [MBankSampahController::class,'index'])->name('m-bank.index');
Route::get('/m-bank/show/{slug}', [MBankSampahController::class,'show'])->name('m-bank.show');
Route::get('/m-bank/create', [MBankSampahController::class,'create'])->name('m-bank.create');
Route::post('/m-bank/store', [MBankSampahController::class,'store'])->name('m-bank.store');
Route::get('/m-bank/edit/{id}',[MBankSampahController::class,'edit'])->name('m-bank.edit');
Route::post('/m-bank/update/{id}',[MBankSampahController::class,'update'])->name('m-bank.update');
Route::post('/m-bank/delete/{id}',[MBankSampahController::class,'destroy'])->name('m-bank.destroy');

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

Route::get('/member/index', [ZepaMemberController::class,'index'])->name('member.index');
Route::get('/member/create', [ZepaMemberController::class,'create'])->name('member.create');
Route::post('/member/store', [ZepaMemberController::class,'store'])->name('member.store');
Route::get('/member/edit/{id}',[ZepaMemberController::class,'edit'])->name('member.edit');
Route::post('/member/update/{id}',[ZepaMemberController::class,'update'])->name('member.update');
Route::post('/member/delete/{id}',[ZepaMemberController::class,'destroy'])->name('member.destroy');

Route::get('/bank-sampah/index', [BankSampahController::class,'index'])->name('bank-sampah.index');
Route::get('/bank-sampah/create', [BankSampahController::class,'create'])->name('bank-sampah.create');
Route::post('/bank-sampah/store', [BankSampahController::class,'store'])->name('bank-sampah.store');
Route::get('/bank-sampah/edit/{id}',[BankSampahController::class,'edit'])->name('bank-sampah.edit');
Route::post('/bank-sampah/update/{id}',[BankSampahController::class,'update'])->name('bank-sampah.update');
Route::post('/bank-sampah/delete/{id}',[BankSampahController::class,'destroy'])->name('bank-sampah.destroy');

Route::get('/header/index', [CarouselHeaderController::class,'index'])->name('header.index');
Route::post('/header/update', [CarouselHeaderController::class,'update'])->name('header.update');