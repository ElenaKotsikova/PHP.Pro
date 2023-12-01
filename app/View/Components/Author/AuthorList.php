<?php

namespace App\View\Components\Author;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class AuthorList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Collection $authors
    )
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.author.author-list');
    }
}
