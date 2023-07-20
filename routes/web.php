<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
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


Route::resource('/', RegistrasiController::class);
Route::get('landing', [RegistrasiController::class, 'landing'])->name('pages.landing');
Route::get('signup', [RegistrasiController::class, 'signup'])->name('regis.signup');
Route::get('signin', [RegistrasiController::class, 'signin'])->name('regis.signin');

Route::get('dashboard', [RegistrasiController::class, 'dashboard'])->name('dashboard.index');
Route::get('profile', [RegistrasiController::class, 'profile'])->name('dashboard.create-profile');
Route::get('dokter', [RegistrasiController::class, 'dokter'])->name('dashboard.add-dokter');
Route::get('notes', [RegistrasiController::class, 'notes'])->name('dashboard.create-notes');
Route::get('jadwal', [RegistrasiController::class, 'jadwal'])->name('dashboard.create-jadwal');

// Route::get('dashboard/profile', [UserController::class, 'profile'])->name('dashboard.profile');
