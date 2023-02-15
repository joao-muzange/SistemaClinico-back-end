<?php

use App\Http\Controllers\EspecialidadeController;
use Illuminate\Support\Facades\Route;


Route::get('/especialidades', [EspecialidadeController::class,'getAll']);
Route::get('/especialidades/{id}', [EspecialidadeController::class,'get']);
Route::post('/especialidades', [EspecialidadeController::class,'create']);
Route::put('/especialidades/{id}', [EspecialidadeController::class,'update']);
Route::delete('/especialidades/{id}', [EspecialidadeController::class,'delete']);
