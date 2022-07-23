<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ProductController::class,'index'])->name('index');
Route::get('/create',[ProductController::class,'create'])->name('create');
Route::post('stroe/',[ProductController::class,'store'])->name('store');
Route::get('show/{product}',[ProductController::class,'show'])->name('show');
Route::get('edit/{product}',[ProductController::class,'edit'])->name('edit');
Route::put('edit/{product}',[ProductController::class,'update'])->name('update');
Route::delete('/{product}',[ProductController::class,'destroy'])->name('destroy');