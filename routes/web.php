<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/info', [InfoController::class, 'tampil'])->name('info.tampil');
Route::get('/info/tambah', [InfoController::class, 'tambah'])->name('info.tambah');
Route::post('/info/submit', [InfoController::class, 'submit'])->name('info.sumbit');
Route::get('/info/edit/{id}', [InfoController::class, 'edit'])->name('info.edit');
Route::post('/info/update/{id}', [InfoController::class, 'update'])->name('info.update');
Route::post('/info/delete/{id}', [InfoController::class, 'delete'])->name('info.delete');


Route::get('/foto', [FotoController::class, 'tampil'])->name('foto.tampil');
Route::get('/foto/tambah', [FotoController::class, 'tambah'])->name('foto.tambah');
Route::post('/foto/submit', [FotoController::class, 'submit'])->name('foto.submit');
Route::get('/foto/edit/{id}', [FotoController::class, 'edit'])->name('foto.edit');
Route::post('/foto/update/{id}', [FotoController::class, 'update'])->name('foto.update');
Route::post('/foto/delete/{id}', [FotoController::class, 'delete'])->name('foto.delete');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
