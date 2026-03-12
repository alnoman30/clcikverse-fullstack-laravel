<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


// User Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'user'])->name('dashboard');


// User Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Admin Dashboard

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Category routes
    Route::get('/category', [AdminController::class, 'category'])->name('admin.category');
    Route::get('/category/create', [AdminController::class, 'categoryCreate'])->name('admin.category.create');
    Route::get('/category/{id}/edit', [AdminController::class, 'categoryEdit'])->name('admin.category.edit');

    // Tag routes
    Route::get('/tag', [AdminController::class, 'tag'])->name('admin.tag');
    Route::get('/tag/create', [AdminController::class, 'tagCreate'])->name('admin.tag.create');
    Route::get('/tag/{id}/edit', [AdminController::class, 'tagEdit'])->name('admin.tag.edit');

    // Post routes
    Route::get('/post', [AdminController::class, 'post'])->name('admin.post');
    Route::get('/post/create', [AdminController::class, 'postCreate'])->name('admin.post.create');
    Route::get('/post/{id}/edit', [AdminController::class, 'postEdit'])->name('admin.post.edit');
    Route::get('/post/{id}', [AdminController::class, 'postShow'])->name('admin.post.show');

});

require __DIR__.'/auth.php';
