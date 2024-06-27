<?php

namespace App\Livewire\Frontend;

use App\Models\serves;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Layout;

class Getservies extends Component
{

    #[Layout('layouts.frontend')]

     public $getcatdata;
     public function mount(){

        $this->getcatdata =  serves::orderby('id','DESC')->get();
     }
    public function render()
    {
        return view('livewire.frontend.getservies');
    }





   #[On('getalldata')]
   public function getalldata(){


          return $this->getcatdata = serves::orderby('id','DESC')->get();






  }
}
