<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/index', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);