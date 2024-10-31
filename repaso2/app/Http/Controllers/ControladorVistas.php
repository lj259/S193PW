<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ControladorVistas extends Controller
{
    public function Principal(){
        return view('Principal');
    }
    public function Registro(){
        return view('Registro');
    }

}
