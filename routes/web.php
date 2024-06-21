<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\opdController;
use App\Http\Controllers\kontakDaruratController;
use App\Http\Controllers\fasilitasDaerah;
use App\Http\Controllers\manageMenuController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\authController;


Route::get('/', [authController::class, 'index'])->name('auth.index');
Route::get('/opd', [opdController::class, 'index'])->name('opd.index');
Route::get('/kontak-darurat', [kontakDaruratController::class, 'index'])->name('kontak-darurat.index');
Route::get('/fasilitas-daerah', [fasilitasDaerah::class, 'index'])->name('fasilitas-daerah.index');
Route::get('/manage-menu', [manageMenuController::class, 'index'])->name('manage-menu.index');
Route::get('/data-users', [usersController::class, 'index'])->name('data-users.index');
