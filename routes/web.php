<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name('home');

Route::get('/about', [\App\Http\Controllers\SiteController::class, 'about'])->name('about');

Route::get('/portfolio', [\App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [\App\Http\Controllers\PortfolioController::class, 'show'])->name('portfolio.show');

Route::get('/contact', [\App\Http\Controllers\SiteController::class, 'contact'])->name('contact');

// Blog Routes
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
