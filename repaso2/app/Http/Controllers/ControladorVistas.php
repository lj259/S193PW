<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarLibro;


class ControladorVistas extends Controller
{
    public function Principal(){
        return view('Principal');
    }
    public function Registro(){
        return view('Registro');
    }
    public function GuardarLibro(ValidarLibro $peticion){

        $Libro = $peticion->input('Titulo');
        session()->flash('Exito','Se guardo el Libro: '.$Libro);
        return to_route('rutaRegistro');
    }
}
