<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use App\Models\sendmessage;
use Livewire\WithPagination;

class Navbar extends Component
{
    use WithPagination;
    public $incrment = 3;
    // public $getdata ;

    // public function mount(){

    //    $this->getdata =  sendmessage::orderby('id','desc')->paginate($this->incrment );

    // }
    public function render()
    {
        return view('livewire.backend.navbar',[

       'getdata'=>sendmessage::orderby('id','desc')->take($this->incrment )->get(),
        'getcount'=>sendmessage::orderby('id','desc')->select('id')->take(5),

        ]);
    }


    public function addmore(){

        $this->incrment = $this->incrment+3;
    }
}
