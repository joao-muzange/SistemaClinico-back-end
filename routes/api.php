<?php

use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\UtenteController;
use Illuminate\Support\Facades\Route;

/* Routas api Especialidaes*/
Route::get('/especialidades', [EspecialidadeController::class,'getAll']);
Route::get('/especialidades/{id}', [EspecialidadeController::class,'get']);
Route::post('/especialidades', [EspecialidadeController::class,'create']);
Route::put('/especialidades/{id}', [EspecialidadeController::class,'update']);
Route::delete('/especialidades/{id}', [EspecialidadeController::class,'delete']);

/* Routas api Utentes*/
Route::get('/utentes', [UtenteController::class,'getAll']);
Route::get('/utentes/{id}', [UtenteController::class,'get']);
Route::post('/utentes', [UtenteController::class,'create']);
Route::put('/utentes/{id}', [UtenteController::class,'update']);
Route::delete('/utentes/{id}', [UtenteController::class,'delete']);