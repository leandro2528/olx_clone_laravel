<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\ImovelController;
use App\Http\Controllers\ApartamentoController;

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


Route::prefix('/imoveis')->group(function() {
    Route::get('/', [ImovelController::class, 'index'])->name('imoveis-index');
});

Route::prefix('/apartamentos')->group(function() {
    Route::get('/create', [ApartamentoController::class, 'create'])->name('apartamentos-create');
    Route::post('/', [ApartamentoController::class, 'store'])->name('apartamentos-store');
    Route::get('{id}edit', [ApartamentoController::class, 'edit'])->name('apartamentos-edit');
});
