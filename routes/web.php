<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AdminController;

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get("/", [ItemController::class, "index"]);
    Route::get('/item/{item}', [ItemController::class, "show"])->name('item.show');
    
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/admin/dashboard/product', [AdminController::class, 'store'])->name('item.store');
});
