<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/about', [AboutController::class,'about']);

Route::get('/', [HomeController::class,'index']);

// Route::get('/', [PageController::class,'index']);

// Route::get('/about', [PageController::class,'about']);

Route::prefix('home')->group(function (){
    Route::get('/pagehome', function (){
        echo "Praktikum 3 No. 1 halaman home";
    }); 
});

Route::prefix('category')->group(function (){
    Route::get('/marbel-edu-games', function (){
        echo "Praktikum 3 No. 2 halaman edu game";
    }); 

    Route::get('/marbel-kids-games', function (){
        echo "Praktikum 3 No. 2 halaman kids game";
    });

    Route::get('/marbel-story-books', function (){
        echo "Praktikum 3 No. 2 halaman story books";
    });

    Route::get('/marbel-kids-songs', function (){
        echo "Praktikum 3 No. 2 halaman kids songs";
    });
});

Route::get('/news/{links?}', function ($links = ''){
    if($links== ''){
        echo "Praktikum 3 No.3 halaman berita ";
    } else{
        echo "Praktikum 3 No.3 halaman berita educa studio";
    }
});

Route::prefix('program')->group(function (){
    Route::get('/karir', function (){
        echo "Praktikum 3 No. 4 halaman karir";
    }); 

    Route::get('/magang', function (){
        echo "Praktikum 3 No. 4 halaman magang";
    });

    Route::get('/kunjungan-industri', function (){
        echo "Praktikum 3 No. 4 halaman kunjungan industri";
    });
});

Route::get('/about-us', function(){
    return 'Pratikum 3 No.5 halaman About Us';
});

Route::resource('/contact-us', ContactController::class)->only(
    ['show']
);