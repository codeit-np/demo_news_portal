<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     */

    public $pageTitle;
    public $metaWord;
    public $metaDescription;
    public $postTitle;
    public $image;
    public function __construct($pageTitle, $metaWord, $metaDescription, $image)
    {
        $this->pageTitle = $pageTitle;
        $this->metaDescription = $metaDescription;
        $this->metaWord = $metaWord;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout');
    }
}
