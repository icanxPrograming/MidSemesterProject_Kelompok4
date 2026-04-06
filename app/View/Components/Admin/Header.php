<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Header extends Component
{
    public string $section;
    /**
     * Create a new component instance.
     */
    public function __construct(string $section = 'dashboard')
    {
        $this->section = $section;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.header');
    }
}
