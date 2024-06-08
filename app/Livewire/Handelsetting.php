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

    public $getid;
    public $imgreslogo;
    public $hearoimgres;
    public $getlogotemp;
    public $hearoimg;
    public $getheroimgtemp;
    public $hearotitle = [];
    public $shortdes = [];
    public $compony_name = [];






    public function mount()  {
       $getdata =  setting::first();

        $this->shortdes['ar'] = $getdata->getTranslation('shortdes','ar');
        $this->shortdes['en'] = $getdata->getTranslation('shortdes','en');
        $this->hearotitle['ar'] = $getdata->getTranslation('hearotitle','ar');
        $this->hearotitle['en'] = $getdata->getTranslation('hearotitle','en');
        $this->compony_name['ar'] = $getdata->getTranslation('compony_name','ar');
        $this->compony_name['en'] = $getdata->getTranslation('compony_name','en');
        $this->getid =$getdata->id;
    }
    public function render()
    {


        $getdata =  setting::first();
        $this->getlogotemp =$getdata->logo;
        $this->getheroimgtemp =$getdata->hearoimg;
        return view('livewire.handelsetting');

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

            'logo' => $this->imgreslogo == null ?  $this->getlogotemp: $this->imgreslogo,
            // 'hearo_img'=>$this->getheroimgres == null? $this->getheroimgtemp:$this->getheroimgres,

        ]);
        $this->dispatch('logo-updated');





    }







    public function uploadhearo() {

        // $this->validate();

        if(!empty($this->hearoimg) ){



            Storage::deleteDirectory('public/hearoimg');
            $this->hearoimgres =  $this->hearoimg->store('hearoimg','public');

        }else{

            $this->hearoimgres = $this->getheroimgtemp;

        }

        setting::where('id',$this->getid)->update([

            'hearoimg'=> $this->hearoimgres == null ?  $this->getheroimgtemp: $this->hearoimgres,
            // 'hearo_img'=>$this->getheroimgres == null? $this->getheroimgtemp:$this->getheroimgres,

        ]);
        $this->dispatch('hearoimg-updated');





    }


    public function updatehearocontent() {

          setting::where('id',$this->getid)->update([

            'compony_name' =>

            [
         'en'=> $this->compony_name['en'],
         'ar'=> $this->compony_name['ar'],

            ],


            'hearotitle' =>

            [
         'en'=> $this->hearotitle['en'],
         'ar'=> $this->hearotitle['ar'],

            ],



            'shortdes' =>

            [
         'en'=> $this->shortdes['en'],
         'ar'=> $this->shortdes['ar'],

            ],

        ]);

        $this->dispatch('hearocon-updated');

    }


}
