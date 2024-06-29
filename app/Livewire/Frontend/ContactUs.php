<?php

namespace App\Livewire\Frontend;

use App\Models\info;
use App\Models\sochail;
use Livewire\Component;
use Livewire\Attributes\Layout;

class ContactUs extends Component
{
    #[Layout('layouts.frontend')]

    public function render()
    {
        return view('livewire.frontend.contact-us',[


            'getsochail' => sochail::first(),
            'getinfo' => info::first(),
        ]);
    }
}
