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
Route::get('/list/{lingkungan}', [BalitaController::class, 'index'])->name('balita.index');
Route::get('/detail/{id_balita}', [BalitaController::class, 'detail'])->name('balita.detail');
Route::get('/add/{id_balita}', [BalitaController::class, 'add'])->name('balita.add');
Route::post('/balita_add', [BalitaController::class, 'store'])->name('balita.store');
Route::get('/new', [BalitaController::class, 'new'])->name('balita.new');
Route::post('/balita_new', [BalitaController::class, 'newStore'])->name('balita.new_store');
// // Route untuk guest
// Route::middleware('guest')->group(function () {
//     Route::get('/', function () {
//         return redirect()->route('login');
//     });
// });

// Auth::routes();

// // Route untuk dashboard berdasarkan role
// Route::middleware('auth')->group(function () {
//     // Redirect ke dashboard sesuai role
//     Route::get('/home', function () {
//         $user = auth()->user();
//         if ($user->hasRole('admin')) {
//             return redirect()->route('admin.dashboard');
//         } elseif ($user->hasRole('bidan')) {
//             return redirect()->route('bidan.dashboard');
//         } elseif ($user->hasRole('kader')) {
//             return redirect()->route('kader.dashboard');
//         }
//         auth()->logout();
//         return redirect()->route('login')
//             ->with('error', 'Akun anda belum memiliki role');
//     })->name('home');

//     Route::get('/data_balita/{lingkungan?}', [BalitaController::class, 'index'])->name('balita.index');
// });

// // Route untuk admin
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// });

// // Route untuk bidan 
// Route::middleware(['auth', 'role:bidan'])->group(function () {
//     Route::get('/bidan/dashboard', [BalitaController::class, 'home'])->name('bidan.dashboard');
// });

// // Route untuk kader
// Route::middleware(['auth', 'role:kader'])->group(function () {
//     Route::get('/kader/dashboard', [UserController::class, 'dashboard'])->name('kader.dashboard');
// });

// // Fallback route
// Route::fallback(function () {
//     return redirect()->route('login');
// });

