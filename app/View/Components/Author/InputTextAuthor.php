<?php

namespace App\View\Components\Author;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputTextAuthor extends Component
{
    public bool $isInvalid = false;
    public function __construct(
        public string $label,
        public string $name,
        public string $id,
        public  string $type = 'text',
        public string|null $value = '',
        public array $errors = [],

    )
    {
        $this->isInvalid = !empty($this->errors);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.author.input-text-author');
    }
}
