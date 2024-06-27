<?php

namespace App\Livewire\Frontend;

use App\Models\serves;
use Livewire\Component;

class GetserviesData extends Component
{


    #[\Livewire\Attributes\Layout('layouts.frontend')]

    public $gitpro_id;

    public function mount($gitid){
        $this->gitpro_id = $gitid;


    }
    public function render()
    {
        return view('livewire.frontend.getservies-data',[

            'getdata' => serves::where('id',$this->gitpro_id)->first(),
        ]);
    }
}
