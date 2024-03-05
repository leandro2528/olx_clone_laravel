<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnuncioController;

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

Route::prefix('/')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboards-index');
});


Route::prefix('/anuncios')->group(function() {
    Route::get('/', [AnuncioController::class, 'index'])->name('anuncios-index');
});

