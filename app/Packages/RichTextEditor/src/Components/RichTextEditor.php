<?php

// namespace App\Packages\RichTextEditor\src\Components;

// use Closure;
// use Illuminate\Contracts\View\View;
// use Illuminate\View\Component;
namespace Soybean15\RichTextEditor\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RichTextEditor extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $model,
        public $key,
        public $value,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('rich-text-editor::rich-text-editor');
    }
}
