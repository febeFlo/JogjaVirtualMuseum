<?php

use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/home', function() {
    return view('home');
})->name('home');

Route::get('/video', function() {
    return view('video');
})->name('video');

Route::get('/getLink', [MapController::class, 'getLink']);
