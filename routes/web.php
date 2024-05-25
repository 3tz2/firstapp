<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {
    return view('admin.dashboard');

});
Route::get('/Categories', [App\Http\Controllers\CategoryController::class, 'Index'])->name('category.index');
Route::post('/Categories/store',[App\Http\Controllers\CategoryController::class,'StoreCategory'])->name('Category.store');
Route::post('/Categories/update',[App\Http\Controllers\CategoryController::class,'updateCategory'])->name('Category.update');

