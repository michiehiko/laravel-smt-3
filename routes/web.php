<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/about', [SiteController::class, 'about'])->name('site.about');
Route::get('/layanan', [SiteController::class, 'layanan'])->name('site.layanan');
Route::get('/struktur', [SiteController::class, 'struktur'])->name('site.struktur');
Route::get('/visimisi', [SiteController::class, 'visimisi'])->name('site.visimisi');
