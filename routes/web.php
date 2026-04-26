<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// 1. Home
Route::get('/', [HomeController::class, 'beranda'])->name('home');

// 2. PINDAHKAN INI KE ATAS (Agar terbaca lebih dulu sebelum parameter {post})
Route::get('/semua-informasi', [HomeController::class, 'semuaPostingan'])->name('post.index');

// 3. Detail Post (Harus di bawah route statis)
Route::get('/post/{post}', [HomeController::class, 'show'])->name('post.show');