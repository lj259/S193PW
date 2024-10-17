<?php

use App\Http\Controllers\ControladorVistas;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControladorVistas::class,'inicio'])->name('rutaInicio');
Route::get('/repaso1', [ControladorVistas::class,'Repaso1'])->name('rutaRepaso1');

