<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Home extends Component
{

    #[Layout('layouts.frontend')]




    public function render()
    {
        return view('livewire.home');
    }
}
