<?php

namespace App\Livewire\Frontend;

use App\Models\getalert;
use App\Models\info;
use App\Models\sendmessage;
use App\Models\sochail;
use Livewire\Component;
use Livewire\Attributes\Layout;

class ContactUs extends Component
{
    #[Layout('layouts.frontend')]
    public $fullname;
    public $getcontact;
    public $des;

    public function render()
    {
        return view('livewire.frontend.contact-us',[


            'getsochail' => sochail::first(),
            'getinfo' => info::first(),
        ]);
    }



    public function savemessage()

    {


     $this->validate([

        'fullname'=>'required|string|max:100',
        'getcontact'=>'required|string|max:100',
       'des'=>'required|string|max:600',
     ]);

     $gemestid =  sendmessage::create([

        'fullname'=> $this->fullname,
        'getcontact'=> $this->getcontact,
         'des'=> $this->des,
      ]);

         $getdata = $gemestid->latest()->first();


         getalert::create([

            'name'=>$getdata->fullname,
         ]);

       $this->dispatch('msadded');
       $this->des ='';
       $this->fullname ='';
       $this->getcontact ='';
    }
}
