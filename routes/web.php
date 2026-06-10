<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ReporteController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('usuarios', UsuarioController::class);
Route::resource('mascotas', MascotaController::class);
Route::resource('reportes', ReporteController::class);