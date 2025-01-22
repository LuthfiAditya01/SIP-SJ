<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalitaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BalitaController::class, 'home'])->name('home');

Route::get('/data_balita', [BalitaController::class, 'index'])->name('balita.index');

Route::post('/stunting/detect', [StuntingController::class, 'detectStunting']);