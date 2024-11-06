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
        $Registro = $Peticion->input('Prenda');
        session()->flash('EXITO','Se ha registrado exitosamente: ' .$Registro);
        return to_route('Principal');
    }
}
