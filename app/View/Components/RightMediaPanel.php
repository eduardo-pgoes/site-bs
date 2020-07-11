<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RightMediaPanel extends Component
{
    /**
     * O título do painel.
     *
     * @var string
     */
    public $title;

    /**
     * URL da imagem do painel.
     *
     * @var string
     */
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $image)
    {
        $this->image = $image;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.right-media-panel');
    }
}
