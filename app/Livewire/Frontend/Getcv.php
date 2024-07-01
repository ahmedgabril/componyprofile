<?php

namespace App\Livewire\Frontend;

use App\Models\docment;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Getcv extends Component
{

    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('livewire.frontend.getcv',[

            'getpdf' => docment::first(),
        ]);
    }
}
