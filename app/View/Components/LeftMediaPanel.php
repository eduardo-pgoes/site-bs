<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LeftMediaPanel extends Component
{
    /**
     * O título do painel.
     *
     * @var string
     */
    public $title;
    
    /**
     * O conteúdo do painel.
     *
     * @var string
     */
    public $content;

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
    public function __construct($title, $content, $image)
    {
        $this->image = $image;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.left-media-panel');
    }
}
