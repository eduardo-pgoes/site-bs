<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FrontBanner extends Component
{

    /**
     * O título do banner.
     *
     * @var string
     */
    public $title;

    /**
     * O conteúdo do banner.
     *
     * @var string
     */
    public $content;

    /**
     * Estilo de background do banner.
     *
     * @var string
     */
    public $bgStyle;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $content, $bgStyle)
    {
        //
        $this->bgStyle = $bgStyle;
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
        return view('components.front-banner');
    }
}
