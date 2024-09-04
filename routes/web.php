<?php

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Comment;

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
Route::post('submit', [CommentController::class, 'submit'])->name('submit');
//Route::post('/addComment', [CommentController::class, 'addComment'])->name('addComment');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
});

Route::post('/register', [AuthController::class, 'register'])->name('register');
