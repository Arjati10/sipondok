<?php

use App\Http\Controllers\Web\LogActivityController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\SantriController;
use \App\Http\Controllers\Web\HafalanController;
use \App\Http\Controllers\Web\RiwayatHafalanController;
use App\Http\Controllers\Web\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::resource('santri', SantriController::class);
    Route::resource('pengguna', UserController::class);
    Route::get('log-aktivitas', [LogActivityController::class, 'index'])->name('logs.index');

    // Hafalan
    Route::get('hafalan', [HafalanController::class, 'index'])->name('hafalan.index');
    Route::get('hafalan/create', [HafalanController::class, 'create'])->name('hafalan.create');
    Route::post('hafalan', [HafalanController::class, 'store'])->name('hafalan.store');
    Route::get('hafalan/print/{id}', [HafalanController::class, 'print'])->name('hafalan.print');
    Route::delete('hafalan/{id}', [HafalanController::class, 'destroy'])->name('hafalan.destroy');
});
