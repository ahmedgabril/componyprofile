<?php

namespace App\Livewire\Frontend;

use App\Models\info;
use Livewire\Component;

class Getlogo extends Component
{
    public function render()
    {
        return view('livewire.frontend.getlogo',[


            'getdata' => info::first()
        ]);
    }
}
