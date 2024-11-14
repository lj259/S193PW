<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

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
Route::view('/component','componentes')->name('rutaComponent'); 

Route::get('/',[ControladorVistas::class,'home']) ->name('rutaInicio');
Route::get('/form',[ControladorVistas::class,'formulario']) ->name('rutaForm');
Route::get('/consultar',[ControladorVistas::class,'consulta']) ->name('rutaClientes');

Route::post('/enviarCliente',[ControladorVistas::class,'ProcesarCliente']) ->name('rutaProcesar');