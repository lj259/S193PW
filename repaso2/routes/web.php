<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/',[ControladorVistas::class,'Principal']) ->name('rutaPrincipal');
Route::get('/Registro',[ControladorVistas::class,'Registro']) ->name('rutaRegistro');
Route::post('/GuardarLibro',[ControladorVistas::class,'GuardarLibro']) ->name('rutaGuardar');