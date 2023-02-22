<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/about', [AboutController::class,'about']);

Route::get('/', [HomeController::class,'index']);

// Route::get('/', [PageController::class,'index']);

// Route::get('/about', [PageController::class,'about']);