<?php

namespace App\Livewire\Backend;

use App\Models\getalert;
use Livewire\Attributes\On;
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
        'getcount'=>getalert::where('status','0')->get(),

        ]);
    }

    #[On('changestatus')]
    public function changestatus(){
        getalert::where('status','0')->update([

            'status'=> 1
        ]);

    }

    public function addmore(){

        $this->incrment = $this->incrment+3;
    }
}
