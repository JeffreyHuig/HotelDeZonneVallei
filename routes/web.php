<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelKamerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(HotelKamerController::class)->group(function () {
    Route::get('/hotelkamers', 'index');
});

Route::get('/restaurant', function () {
    return view('restaurant');
});

Route::get('/overons', function () {
    return view('overons');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
