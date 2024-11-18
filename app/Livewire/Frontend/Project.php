<?php

namespace App\Livewire\Frontend;

use App\Models\catogery;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Project extends Component
{


    #[Layout('layouts.frontend')]

     public $getcatdata;
     public function mount(){

        $this->getcatdata =  \App\Models\project::orderby('id','DESC')->get();
     }
    public function render()
    {
        return view('livewire.frontend.project',[


       'cats' => catogery::get(),


        ]);
    }

     public function getcat($getid){
         if($getid){
            return $this->getcatdata =  \App\Models\project::where('catogery_id',$getid)->orderby('id','DESC')->get();


         }



    }



    public function getalldata(){


           return $this->getcatdata =  \App\Models\project::orderby('id','DESC')->get();






   }
}
