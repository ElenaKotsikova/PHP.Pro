<?php

namespace App\View\Components\Author;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputTextAuthor extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $label,
        public string $name,
        public string $id,
        public  string $type = 'text',
        public string | null $error = null,

    )
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.author.input-text-author');
    }
}
