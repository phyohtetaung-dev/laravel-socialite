<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::controller(LoginController::class)->group(function () {
    Route::get('/auth/{provider}/redirect', 'handleRedirect');
    Route::get('/auth/{provider}/callback', 'handleCallback');
    Route::get('/auth/error', 'handleError')->name('error');
});
