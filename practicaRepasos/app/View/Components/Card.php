<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
public $titulo;
public $nombre;
public $materia;
public $profesor;
public $grupo;
    /**
     * Create a new component instance.
     */
    public function __construct($titulo,$nombre,$materia,$profesor,$grupo,)
    {
        $this -> titulo = $titulo;
        $this -> nombre = $nombre;
        $this -> materia = $materia;
        $this -> profesor = $profesor;
        $this -> grupo= $grupo;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
