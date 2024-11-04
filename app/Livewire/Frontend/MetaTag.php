<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Component;

class MetaTag extends Component
{
    #[Layout('layouts.frontend')]
    public $title;
    public $description;
    public $keywords = [];
    public function mount($title = 'gray-tec', $description = 'Default Description', $keywords = ['default, keywords'])
    {
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
    }
    public function render()
    {
        return view('livewire.frontend.meta-tag');
    }
}
