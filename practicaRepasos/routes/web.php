<?php

use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\ControladorCrud;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControladorVistas::class,'inicio'])->name('rutaInicio');
Route::get('/repaso1', [ControladorVistas::class,'Repaso1'])->name('rutaRepaso1');
Route::post('/MG', [ControladorCrud::class,'MG'])->name('rutaMG');
Route::post('/GM', [ControladorCrud::class,'GM'])->name('rutaGM');
Route::post('/GT', [ControladorCrud::class,'GT'])->name('rutaGT');
Route::post('/TG', [ControladorCrud::class,'TG'])->name('rutaTG');

