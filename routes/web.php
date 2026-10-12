<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\IncidentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Panel Principal (Inventario)
    Route::get('/dashboard', [EquipmentController::class, 'index'])->name('dashboard');
    
    // Rutas de Préstamos e Incidencias
    Route::get('/prestamos', [LoanController::class, 'index'])->name('loans.index');
    Route::get('/incidencias', [IncidentController::class, 'index'])->name('incidents.index');

    // Rutas de perfil (Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';