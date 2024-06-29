<?php

namespace App\Livewire\Frontend;

use App\Models\team;
use App\Models\about;
use Livewire\Component;
use Livewire\Attributes\Layout;

class AboutUs extends Component
{

    #[Layout('layouts.frontend')]

    public function render()
    {
        return view('livewire.frontend.about-us',[

            'getdata' => about::first(),
            'getourteame' => team::get(),
        ]);
    }
}
