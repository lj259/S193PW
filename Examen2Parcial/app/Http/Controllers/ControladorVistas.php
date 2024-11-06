<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarPrenda;

class ControladorVistas extends Controller
{
    public function VistaPrenda(){
        return view('RegistroPrenda');
    }
    public function RegistrarPrenda(ValidarPrenda $Peticion){
        $Prenda = $Peticion->input('Prenda');
        $color = $Peticion->input('Color');
        $espacio = " ";
        $resultado = $Prenda.$espacio.$color;
        session()->flash('EXITO', 'Se ha guardado exitosamente: ' .$resultado);
        return to_route('Principal');
    }
}
