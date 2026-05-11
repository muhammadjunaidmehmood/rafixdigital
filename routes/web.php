<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Controller ko yahan import karna zaroori hai

// Isay hata kar niche wala professional route likhein:

Route::get('/', [HomeController::class, 'index'])->name('home');