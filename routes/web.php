<?php

use App\Http\Controllers\BlogcategoriesController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    // Dashboard Route
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Category Routes
    Route::get('categories', [BlogcategoriesController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [BlogcategoriesController::class, 'create'])->name('categories.create');
    Route::post('categories/store', [BlogcategoriesController::class, 'store'])->name('categories.store');
    
    // Check if category name exists (AJAX)
    Route::get('categories/checkName', [BlogcategoriesController::class, 'checkName'])->name('categories.checkName');

    // Edit Category
    Route::get('categories/{category}/edit', [BlogcategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('categories/{category}', [BlogcategoriesController::class, 'update'])->name('categories.update');

    // Delete Category
    Route::delete('categories/{category}', [BlogcategoriesController::class, 'destroy'])->name('categories.destroy');

    Route::post('/blog-categories/toggle-status', [BlogCategoriesController::class, 'toggleStatus'])
    ->name('blogCategories.toggleStatus');
});
