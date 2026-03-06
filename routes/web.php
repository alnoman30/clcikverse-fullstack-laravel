<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// frontend routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');



// Admin routes

// dashboard route
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');

// category routes
Route::get('/admin/category', [AdminController::class, 'category'])->name('admin.category');
Route::get('/admin/category/create', [AdminController::class, 'categoryCreate'])->name('admin.category.create');
Route::get('/admin/category/{id}/edit', [AdminController::class, 'categoryEdit'])->name('admin.category.edit');


// tag routes
Route::get('/admin/tag', [AdminController::class, 'tag'])->name('admin.tag');
Route::get('/admin/tag/create', [AdminController::class, 'tagCreate'])->name('admin.tag.create');
Route::get('/admin/tag/{id}/edit', [AdminController::class, 'tagEdit'])->name('admin.tag.edit');

// post routes
Route::get('/admin/post', [AdminController::class, 'post'])->name('admin.post');
Route::get('/admin/post/create', [AdminController::class, 'postCreate'])->name('admin.post.create');
Route::get('/admin/post/{id}/edit', [AdminController::class, 'postEdit'])->name('admin.post.edit');
Route::get('/admin/post/{id}', [AdminController::class, 'postShow'])->name('admin.post.show');
