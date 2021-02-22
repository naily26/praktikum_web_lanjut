<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomePagetController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactUsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Praktikum 1
// Route::get('/', function () {
//     return "Selamat Datang";
//     });

// Route::get('/about', function () {
//     return "Naily Ikmalul Insiyah (1941720044)";
//     });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '. $id;
// });

// Praktikum 2 no 2
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Praktikum 2 no 3
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticlesController::class, 'articles']);

// Praktikum 3
//halaman Home
Route::get('/home', [HomePagetController::class, 'home']);

// Halaman Product
Route::prefix('category')->group(function () {
    Route::get('/', [ProductController::class, 'marbeledugames'] );
    Route::get('/marbelandfriend', [ProductController::class, 'marbelandfriend'] );
    Route::get('/riristorybooks', [ProductController::class, 'riristorybooks'] );
    Route::get('/kolakkidssongs', [ProductController::class, 'kolakkidssongs'] );
    });

//  Halaman News
Route::get('/{param}', [NewsController::class, 'news']);
Route::get('/news/{param}', [NewsController::class, 'news2']);

// Halaman Program
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir'] );
    Route::get('/magang', [ProgramController::class, 'magang'] );
    Route::get('/kunjunganindustri', [ProgramController::class, 'kunjunganindustri'] );
    });

// Halaman About Us
Route::get('/aboutus', function () {
        return '<a href="https://www.educastudio.com/about-us">About Us</a>';
        });

// Halaman Contact Us
Route::resource('contact-us', ContactUsController::class);
