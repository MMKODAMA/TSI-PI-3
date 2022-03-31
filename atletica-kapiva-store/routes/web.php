<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function(){

Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product/create',[ProductController::class,'store'])->name('product.store');
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

});
