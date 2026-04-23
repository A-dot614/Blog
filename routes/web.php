<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/blog-detail/{blog:slug}', [BlogController::class, 'show'])->name('blog.detail');
Route::get('/save/{blog}', [BlogController::class, 'save'])->name('blog.save')->middleware('auth');

Route::get('/unsave/{blog}/unsaved', [BlogController::class, 'unsave'])->name('blog.unsave');

Route::get('/account', [BlogController::class, 'account'])->name('account')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
