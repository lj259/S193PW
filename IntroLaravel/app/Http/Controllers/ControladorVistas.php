<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    /* Usamos este controlador para administrar la logica de las vistas */
    public function home(){
        return view('inicio');
    }
    public function formulario(){
        return view('formulario');
        
    }
    public function consulta(){
        return view('clientes');
        
    }
    public function ProcesarCliente(Request $peticion){
        // return 'Si llego los datos del cliente :)'
        // return $peticion ->path(); ruta
        // return $peticion ->url(); url
        return $peticion ->ip(); 
        // return $peticion ->all();
    }
}
