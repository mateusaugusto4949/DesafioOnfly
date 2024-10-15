<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DespesaController;

Route::get('usuarios', [UsuarioController::class, 'index']);
Route::post('usuarios', [UsuarioController::class, 'store']);
Route::get('usuarios/{id}', [UsuarioController::class, 'show']);
Route::put('usuarios/{id}', [UsuarioController::class, 'update']);
Route::delete('usuarios/{id}', [UsuarioController::class, 'destroy']);

Route::get('despesas', [DespesaController::class, 'index']);
Route::post('despesas', [DespesaController::class, 'store']);
Route::get('despesas/{id}', [DespesaController::class, 'show']);
Route::put('despesas/{id}', [DespesaController::class, 'update']);
Route::delete('despesas/{id}', [DespesaController::class, 'destroy']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
