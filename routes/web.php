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

// Route untuk guest
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });
});

Auth::routes();

// Route untuk semua user
Route::get('/home', function () {
    if (auth()->check()) {
        $controller = new BalitaController();
        return $controller->home();
    }
    return redirect()->route('login');
})->name('home');

// Route yang memerlukan auth
Route::middleware('auth')->group(function () {
    Route::get('/data_balita/{lingkungan?}', [BalitaController::class, 'index'])->name('balita.index');
});

// Routes untuk admin
// Route untuk admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
// Routes untuk bidan
// Route untuk bidan
Route::middleware(['auth', 'role:bidan'])->group(function () {
    Route::get('/bidan/dashboard', [BalitaController::class, 'home'])->name('bidan.dashboard');
});
// Routes untuk kader
// Route untuk kader
Route::middleware(['auth', 'role:kader'])->group(function () {
    Route::get('/kader/dashboard', [UserController::class, 'dashboard'])->name('kader.dashboard');
});

// Fallback route
Route::fallback(function () {
    return redirect()->route('login');
});