<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BalitaController::class, 'home'])->name('home');

Route::get('/data_balita/{lingkungan?}', [BalitaController::class, 'index'])->name('balita.index');

Route::post('/stunting/detect', [StuntingController::class, 'detectStunting']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes untuk admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Tambahkan route admin lainnya
});

// Routes untuk user bidan
Route::middleware(['auth', 'role:bidan'])->group(function () {
    Route::get('bidan/dashboard', [BalitaController::class, 'home'])->name('bidan.dashboard');
    // Tambahkan route user lainnya
});

// Routes untuk user kader
Route::middleware(['auth', 'role:kader'])->group(function () {
    Route::get('kader/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    // Tambahkan route user lainnya
});
