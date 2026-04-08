<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatCard extends Component
{
    public string $title;
    public string $value;
    public string $description;
    public string $accent;

    /**
     * Create a new component instance.
     */
    public function __construct(string $title = '', string $value = '', string $description = '', string $accent = 'sky')
    {
        $this->title = $title;
        $this->value = $value;
        $this->description = $description;
        $this->accent = $accent;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.stat-card');
    }
}