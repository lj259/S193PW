<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/', [ControladorVistas::class, 'VistaPrenda'])->name('Principal');

Route::post('/Registrar', [ControladorVistas::class, 'RegistrarPrenda'])->name('Registrar');
