<?php

namespace App\Livewire\Frontend;

use App\Models\info;
use App\Models\serves;
use App\Models\sochail;
use Livewire\Component;

use App\Models\getalert;
use App\Models\sendmessage;
use Livewire\Attributes\Layout;

class ContactUs extends Component
{
    #[Layout('layouts.frontend')]
    public $fullname;
    public $serv_name;
    public $getcontact;
    public $des;

    public function render()
    {
        return view('livewire.frontend.contact-us',[


            'getsochail' => sochail::first(),
            'getinfo' => info::first(),
           'getserv' => serves::get(),
        ]);
    }



    public function savemessage()

    {


     $this->validate([

        'fullname'=>'required|string|max:100',
        'serv_name'=>'sometimes|nullable|string',
        'getcontact'=>'required|string|max:100',
       'des'=>'string|max:600',
     ]);

     $gemestid =  sendmessage::create([

        'fullname'=> $this->fullname,
        'getcontact'=> $this->getcontact,
        'serv_name'=> $this->serv_name,
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
       $this->serv_name ='';
    }
}
