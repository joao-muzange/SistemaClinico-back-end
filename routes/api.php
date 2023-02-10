<?php

use App\Http\Controllers\EspecialidadeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::get('especialidades', EspecialidadeController::class);
 Route::get('/especialidades', [EspecialidadeController::class,'index']);
// Route::post('/especialidades/{request}', [EspecialidadeController::class,'create']);
// Route::put('/especialidades', [EspecialidadeController::class,'update']);
// Route::delete('/especialidades', [EspecialidadeController::class,'delete']);