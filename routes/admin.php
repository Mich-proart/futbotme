<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

// Rutas para el panel admin 
Route::get('admin-panel/', [AdminController::class, 'index']);

Route::get('admin-panel/torneos/', [AdminController::class, 'indexTorneos']);

Route::get('admin-panel/agenda/', [AdminController::class, 'indexAgenda']);

Route::get('admin-panel/federaciones/', [AdminController::class, 'indexFederaciones']);

Route::get('admin-panel/clubes/', [AdminController::class, 'indexClubes']);

Route::get('admin-panel/jugadores/', [AdminController::class, 'indexJugadores']);

Route::get('admin-panel/admin-disenho-menu/', [AdminController::class, 'indexCrearMenu']);