<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Middleware\Authenticate;

// Landing Page
Route::get('/beranda', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/lainnya', function () {
    return view('pilihanGame');
});



// Admin Routes
Route::middleware([Authenticate::class])->prefix('admin')->group(function () {
    Route::resource('/dashboard', AdminController::class);
    Route::resource('/game', GameController::class);

    // Game Routes
    Route::get('/mobile-legends', [GameController::class, 'mobileLegends'])->name('mobileLegends');
    Route::get('/free-fire', [GameController::class, 'freeFire'])->name('freeFire');
});


// Auth
Auth::routes();
Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});
