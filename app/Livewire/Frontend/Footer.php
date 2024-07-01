<?php

namespace App\Livewire\Frontend;

use App\Models\info;
use App\Models\sochail;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        return view('livewire.frontend.footer',[


            'getsochail' => sochail::first(),

        ]);
    }
}
