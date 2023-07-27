<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ScheduleController;


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


Route::get('/', [RegistrasiController::class, 'landing'])->name('pages.landing');
Route::get('signup', [RegistrasiController::class, 'signup'])->name('regis.signup');
Route::get('signin', [RegistrasiController::class, 'signin'])->name('regis.signin');
Route::post('/signup', [AuthController::class, 'processSignup'])->name('signup');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('dashboard.create-profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/view', [ProfileController::class, 'view'])->name('profile.view');
    Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
    Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
    Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');
    Route::post('/notes/store', [NoteController::class, 'store'])->name('notes.store');
    Route::put('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');
    Route::post('/notes/destroy/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');
    Route::get('dokter', [RegistrasiController::class, 'dokter'])->name('dashboard.add-dokter');
    Route::get('schedules/{doctorId}', [ScheduleController::class, 'show'])->name('dashboard.create-jadwal');
    Route::get('schedule/view', [ScheduleController::class, 'viewSchedule'])->name('schedule.view');
    Route::get('/schedule/{schedule}/edit', [ScheduleController::class, 'editSchedule'])->name('schedule.edit');
    Route::put('/schedule/{schedule}', [ScheduleController::class, 'updateSchedule'])->name('schedule.update');
    Route::post('schedules', [ScheduleController::class, 'store'])->name('schedules.store');
    Route::delete('schedules/{schedule}', [ScheduleController::class, 'deleteSchedule'])->name('schedule.delete');
});

Route::get('dashboard', [RegistrasiController::class, 'dashboard'])->name('dashboard.index');

// Route::get('dashboard/profile', [UserController::class, 'profile'])->name('dashboard.profile');
