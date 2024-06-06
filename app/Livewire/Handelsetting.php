<?php

namespace App\Livewire;

use App\Models\setting;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Handelsetting extends Component
{
     use WithFileUploads;

    #[Layout("layouts.app")]


    #[Validate("nullable|image|max:1024")]
    public $logo;
    public $shortdes;
    public $getid;
    public $imgreslogo;
    public $getlogotemp;
    public $hearoimg;
    public $logo_status  = false;
    public $hearotitle;

    public $compony_name;



    public function mount()  {
       $getdata =  setting::first();
        $this->logo = $getdata->logo;
        $this->shortdes = $getdata->shortdes;
        $this->hearoimg = $getdata->hearoimg;
        $this->hearotitle = $getdata->hearotitle;
        $this->compony_name = $getdata->compony_name;
        $this->getid =$getdata->id;
    }
    public function render()
    {


        $getdata =  setting::first();
        $this->getlogotemp =$getdata->logo;
        // $this->getheroimgtemp =$getdata->hearo_img;
        return view('livewire.handelsetting');

    }


            public function changstatus(){

dd($this->logo);
           $this->logo_status = true;



            }

    public function uploadlogo() {

        // $this->validate();
        if(!empty($this->logo) ){



            Storage::deleteDirectory('public/logo');
            $this->imgreslogo =  $this->logo->store('logo','public');

        }else{

            $this->imgreslogo = $this->getlogotemp;

        }

        setting::where('id',$this->getid)->update([

            'logo'=>$this->imgreslogo == null ?  $this->getlogotemp: $this->imgreslogo,
            // 'hearo_img'=>$this->getheroimgres == null? $this->getheroimgtemp:$this->getheroimgres,

        ]);
        $this->dispatch('logo-updated');

        $this->logo_status = false;

    }
}
