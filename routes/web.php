<?php

use App\Http\Controllers\PostController_V2;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogHomepageController_V2;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');
//Route::view('/', 'home');

Route::view('/inquiry_thankyou', 'thankyou');


Route::prefix('/blogs')->group(function () {
    Route::get('/', BlogHomepageController_V2::class)->name('home');
    Route::get('/category/{category:slug}', CategoryController::class)->name('category');
    Route::get('/post/{post:slug}', PostController_V2::class)->name('post');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
