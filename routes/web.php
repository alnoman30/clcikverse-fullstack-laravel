<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/category', [AdminController::class, 'category'])->name('admin.category');
Route::get('/admin/category/create', [AdminController::class, 'categoryCreate'])->name('admin.category.create');
Route::get('/admin/category/{id}/edit', [AdminController::class, 'categoryEdit'])->name('admin.category.edit');
