<?php

use App\Http\Controllers\Web\HafalanController;
use App\Http\Controllers\Web\RiwayatHafalanController;
use App\Http\Controllers\Web\LogActivityController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\SantriController;
use App\Http\Controllers\Web\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::resource('regist', SantriController::class);

Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');

    Route::resource('santri', SantriController::class);
    Route::post('/santri/create', [SantriController::class, 'store'])->name('santri.create');

    Route::resource('pengguna', UserController::class);
    
    Route::resource('hafalan', HafalanController::class);
    Route::get('/hafalan/create', [HafalanController::class, 'store'])->name('hafalan.create');

    Route::resource('riwayat-hafalan', RiwayatHafalanController::class);

    Route::get('log-aktivitas', [LogActivityController::class, 'index'])->name('logs.index');
});