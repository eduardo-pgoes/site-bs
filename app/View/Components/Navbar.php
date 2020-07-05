<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Temporada;

class Navbar extends Component
{
    public $anos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $anos = Temporada::get()->map(function ($item)
        {
           return $item->ano;
        })->sort()->reverse();
        
        $this->anos = $anos;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
