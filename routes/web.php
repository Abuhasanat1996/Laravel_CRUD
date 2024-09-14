<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/',[ProductController::class,"index"])->name('product.index');
Route::get('/create',[ProductController::class,"create"])->name('product.create');

Route::Post('/store',[ProductController::class,"store"])->name('product.store');
Route::get('/edit/{id}',[ProductController::class,"edit"])->name('product.edit');
Route::Post('/update/{id}',[ProductController::class,"update"])->name('product.update');
Route::get('/delete/{id}',[ProductController::class,"delete"])->name('product.delete');









