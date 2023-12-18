<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TransactionController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('logout', [HomeController::class,'logout'])->name('logout');


//Admin Route

Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login');
Route::post('/admin',[LoginController::class,'adminLogin']);

Route::get('admin/home',[AdminController::class,'index'])->name('admin.home');
Route::get('admin/logout', [AdminController::class,'logout'])->name('admin.logout');


// Product All Route
Route::get('admin/product/all', [ProductController::class,'Index'])->name('all.product');
Route::get('admin/product/add', [ProductController::class,'Create'])->name('add.product');
Route::post('admin/store/product', [ProductController::class,'Store'])->name('store.product');
Route::get('delete/product/{id}', [ProductController::class,'Delete']);
Route::get('edit/product/{id}', [ProductController::class,'Edit']);
Route::post('update/product/{id}', [ProductController::class,'Update']);


// Transaction All Route
Route::get('admin/transaction-history', [TransactionController::class,'Index'])->name('all.transaction');
Route::get('admin/transaction/add', [TransactionController::class,'Create'])->name('add.transaction');
Route::post('admin/store/transaction', [TransactionController::class,'Store'])->name('store.transaction');
Route::get('delete/transaction/{id}', [TransactionController::class,'Delete']);