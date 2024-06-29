<?php

namespace App\Livewire\Frontend;

use App\Models\fact;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Getfact extends Component
{

    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('livewire.frontend.getfact',[


            'getdata' => fact::orderBy('id','DESC')->get() ,
        ]);
    }
}
