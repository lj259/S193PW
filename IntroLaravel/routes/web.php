<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;

/* Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio');

Route::get('/form', function () {
    return view('formulario');
})->name('rutaForm');

Route::get('/consultar', function () {
    return view('clientes');
})->name('rutaClientes');
 */
/* Route::view('/','inicio')->name('rutaInicio');
Route::view('/form','formulario')->name('rutaForm');
Route::view('/consultar','clientes')->name('rutaClientes');*/

/*
Rutas para Controlador Vistas
*/
Route::get('/',[ControladorVistas::class,'home']) ->name('rutaInicio');

/*
Rutas para clienteControler
*/
Route::get('/cliente/create',[clienteController::class,'create']) ->name('rutaForm');

Route::post('/cliente',[clienteController::class,'store']) ->name('rutaEnviar');
// Se puede tener 2 veces el mismo nombre, pero no pueden ser por el mismo metodo, uno puede ser POST y el otro GET
Route::get('/cliente',[clienteController::class,'index']) ->name('rutaClientes');