<?php

namespace App\View\Components;

use Illuminate\View\Component;

class flipCard extends Component
{
    public $src_imagem;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src_imagem)
    {
        $this->src_imagem = $src_imagem;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.flip-card');
    }
}
