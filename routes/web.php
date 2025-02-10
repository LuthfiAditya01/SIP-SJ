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
    // Halaman Dashboard
    Route::get('/dashboard', [BalitaController::class, 'home'])->name('dashboard');
    // Daftar Balita per Lingkungan
    Route::get('/list/{lingkungan}', [BalitaController::class, 'index'])->name('balita.index');
    // Detail Informasi Balita
    Route::get('/detail/{id_balita}', [BalitaController::class, 'detail'])->name('balita.detail');
    // Menambah Data Perkembangan Balita
    Route::get('/add/{id_balita}', [BalitaController::class, 'add'])->name('balita.add');
    // Menyimpan Data Perkembangan Balita
    Route::post('/balita_add', [BalitaController::class, 'store'])->name('balita.store');
    // Menambah Data Balita Baru
    Route::get('/new', [BalitaController::class, 'new'])->name('balita.new');
    // Menyimpan Data Balita yang baru ditambahkan
    Route::post('/balita_new', [BalitaController::class, 'newStore'])->name('balita.new_store');
    // Menghapus Data Perkembangan Balita
    Route::delete('/perkembangan-total/{id}', [BalitaController::class, 'destroy'])->name('balita.destroy');
    // Mengedit Data Perkemabangan Balita yang sudah ada
    Route::get('/perkembangan-total/edit/{id}', [BalitaController::class, 'edit'])->name('perkembangan.edit');
    // Menyimpan data perkembangan balita yang sudah diedit
    Route::put('/perkembangan-total/{id}', [BalitaController::class, 'update'])->name('balita.update');
    // Mengubah Status Kesehatan Balita
    Route::put('/detail/change_status/{id}', [BalitaController::class, 'updateStatus'])->name('balita.updateStatus');
});

require __DIR__.'/auth.php';
