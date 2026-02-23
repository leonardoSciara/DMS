<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

use App\Http\Controllers\Admin\UserController;
Route::middleware(['auth', App\Http\Middleware\EnsureAdmin::class])->prefix('admin')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
});
