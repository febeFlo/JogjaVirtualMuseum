<?php

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Kuesioner1Controller;
use App\Http\Controllers\Kuesioner34Controller;
use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Comment;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('auth.register');
});

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::post('/login', [UserController::class, 'login'])->name('login');
// Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/logout', function () {
    return view('login');
})->name('logout');

Route::get('/home', [MapController::class, 'show'])->name('home');
Route::get('/vote', [Kuesioner1Controller::class, 'show'])->name('vote');

Route::get('getLink/{id}', [MapController::class, 'getLink']);
// Route::post('submit', [CommentController::class, 'submit'])->name('submit');
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
Route::post('/submit1', [Kuesioner1Controller::class, 'submit'])->name('submit1');
Route::post('/submit2', [Kuesioner34Controller::class, 'submit'])->name('submit2');


// Master Route
