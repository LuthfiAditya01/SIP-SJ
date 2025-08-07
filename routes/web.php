<?php

use App\Http\Controllers\BalitaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', function(){
    return view('welcome');
})->name('home');

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route::get('/dashboard', [BalitaController::class, 'index'])->name('dashboard')->
Route::middleware(['auth', 'role:kader,bidan'])->group(function(){
    Route::get('/dashboard', [BalitaController::class, 'home'])->name('dashboard');
    Route::get('/list/{lingkungan}', [BalitaController::class, 'index'])->name('balita.index');
    Route::get('/detail/{id_balita}', [BalitaController::class, 'detail'])->name('balita.detail');
    Route::get('/add/{id_balita}', [BalitaController::class, 'add'])->name('balita.add');
    Route::post('/balita_add', [BalitaController::class, 'store'])->name('balita.store');
    Route::get('/new', [BalitaController::class, 'new'])->name('balita.new');
    Route::post('/balita_new', [BalitaController::class, 'newStore'])->name('balita.new_store');
    Route::delete('/perkembangan-total/{id}', [BalitaController::class, 'destroy'])->name('balita.destroy');
    // Tampilkan form edit
    Route::get('/perkembangan-total/edit/{id}', [BalitaController::class, 'edit'])->name('perkembangan.edit');

    // Proses update data
    Route::put('/perkembangan-total/{id}', [BalitaController::class, 'update'])->name('balita.update');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/{id}/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
});

require __DIR__.'/auth.php';
