<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('index');
Route::get('login', \App\Http\Controllers\Auth\LoginController::class)->name('login');
Route::post('login', \App\Http\Controllers\Auth\AccessController::class)->name('access');

Route::get('publicacoes', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('publicacoes/{slug}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('search', [\App\Http\Controllers\PostController::class, 'search'])->name('posts.search');
Route::middleware(['auth'])->prefix('admin')->group(function (){
    Route::get('/', \App\Http\Controllers\Admin\DashboardController::class);
});
