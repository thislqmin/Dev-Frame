<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


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
Route::post('/signup', [AuthController::class, 'processSignup'])->name('signup');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('dashboard.create-profile');
    Route::post('/profile', [ProfileController::class, 'storeOrUpdate'])->name('profile.storeOrUpdate');
    Route::get('/profile/view', [ProfileController::class, 'view'])->name('profile.view');
});

Route::get('dashboard', [RegistrasiController::class, 'dashboard'])->name('dashboard.index');
Route::get('dokter', [RegistrasiController::class, 'dokter'])->name('dashboard.add-dokter');
Route::get('notes', [RegistrasiController::class, 'notes'])->name('dashboard.create-notes');
Route::get('jadwal', [RegistrasiController::class, 'jadwal'])->name('dashboard.create-jadwal');

// Route::get('dashboard/profile', [UserController::class, 'profile'])->name('dashboard.profile');
