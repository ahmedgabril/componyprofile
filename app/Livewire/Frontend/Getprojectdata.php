<?php

namespace App\Livewire\Frontend;

use App\Models\project;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Getprojectdata extends Component
{

    #[Layout('layouts.frontend')]

    public $gitpro_id;

    public function mount($gitid){
        $this->gitpro_id = $gitid;

    }
    public function render()
    {
        return view('livewire.frontend.getprojectdata',[



            'getdata' => project::where('id',$this->gitpro_id)->first(),
        ]);
    }
}
