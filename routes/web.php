<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/',function(){
    return view('welcome');
});

Route::get('products',[ProductController::class,'index'])->name('products');
Route::post('products',[ProductController::class,'store'])->name('store-product');
Route::get('products/new',[ProductController::class,'create'])->name('new-product');
Route::get('products/edit/{id}',[ProductController::class,'edit']);

Route::post('products/edit/{id}',[ProductController::class,'update'])->name('update');

Route::get('products/delete/{id}',[ProductController::class,'destroy']);