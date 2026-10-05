<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Home Page
Route::view('/', 'auth.home')->name('home');

// About Page
Route::view('/about', 'auth.about')->name('about');

// Destinations Page
Route::view('/destinations', 'auth.destinations')
    ->name('destinations');

// Gallery Page
Route::view('/gallery', 'auth.gallery')
    ->name('gallery');

// Contact Page
Route::view('/contact', 'auth.contact')
    ->name('contact');

// Show Login Page
Route::get('/auth/login', [LoginController::class, 'show'])
    ->name('login');

// Process Login
Route::post('/auth/login', [LoginController::class, 'login'])
    ->name('login.submit');

// Logout
Route::post('/auth/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

