<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/beranda', function () {
    return view('myLayout');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/lainnya', function () {
    return view('pilihanGame');
});

Route::get('/kembali', function () {
    return view('myLayout');
});

Auth::routes();

route::resource('/dashboard', AdminController::class);

route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});
