<?php

namespace App\Livewire;

use App\Models\docment;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Response;

class Handelcv extends Component
{


    use WithFileUploads;
    #[Layout('layouts.app')]




     public $doc;
     public $getid;

     public function mount(){

         $getdata = docment::first();
         $this->getid = $getdata?->doc;
         $this->getid = $getdata?->id;
     }

    public function render()
    {
        return view('livewire.handelcv',[

            'getpdf' => docment::first(),
        ]);
    }



    public function addcv(){

    $this->validate([

      'doc' => 'required|file|mimes:pdf,png,jpg, jpeg ,jpeg, webp',
    ]);

        if($this->getid){

       docment::where('id',$this->getid)->update([
            'doc'=> $this->doc->store('pdf','public')

         ]);

         $this->doc = '';

        }else{

            docment::create([
                'doc'=> $this->doc->store('pdf','public')

             ]);
             $this->doc = '';

        }


    }
}
