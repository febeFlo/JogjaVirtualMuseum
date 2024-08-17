<?php

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/home', [MapController::class, 'show'])->name('home');

Route::get('/video', function() {
    return view('video');
})->name('video');

Route::get('getLink/{id}', [MapController::class, 'getLink']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
});
