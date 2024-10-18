<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Raw;

class ControladorCrud extends Controller
{
    public function MG(Request $conversion){   
        $numero = $conversion->numero;
        $resultado = $numero/1024;
        return view('repaso1',['conversionMG' => $resultado]);
    }
    public function GM(Request $conversion){   
        $numero = $conversion->numero;
        $resultado = $numero*1024;
        return view('repaso1',['conversionGM' => $resultado]);
    }
    public function GT(Request $conversion){   
        $numero = $conversion->numero;
        $resultado = $numero/1024;
        return view('repaso1',['conversionGT' => $resultado]);
    }
    public function TG(Request $conversion){   
        $numero = $conversion->numero;
        $resultado = $numero*1024;
        return view('repaso1',['conversionTG' => $resultado]);
    }
}
