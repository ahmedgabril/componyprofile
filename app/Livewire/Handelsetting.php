<?php

namespace App\Livewire;

use App\Models\setting;
use App\Models\sochail;
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
    #[Validate("nullable|url")]
     public $facebook  ;
     #[Validate("url")]
      public $linkedin;
      #[Validate("url")]
      public $youtube ;

      public $twitter , $telgram,$tictok,$whatsup,$gmail;
    public $getid;
    public $sochail_id;
    public $imgreslogo;
    public $hearoimgres;
    public $getlogotemp;
    public $hearoimg;
    public $getheroimgtemp;
    public $hearotitle = [];
    public $shortdes = [];
    public $compony_name = [];






    public function mount()  {


        $getsocail =  sochail::first();
        $this->youtube = $getsocail?->youtube;
        $this->twitter = $getsocail?->twitter;
        $this->facebook = $getsocail?->twitter;
         $this->telgram = $getsocail?->telgram;
         $this->whatsup = $getsocail?->whatsup;
         $this->gmail = $getsocail?->gmail;
         $this->linkedin = $getsocail?->linkedin;
         $this->tictok = $getsocail?->tictok;
         $this->sochail_id = $getsocail?->id;
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



        if($this->getid){


            setting::where('id',$this->getid)->update([

                'logo' => $this->imgreslogo == null ?  $this->getlogotemp: $this->imgreslogo,

            ]);
        }else{

            setting::create([

                'logo' => $this->imgreslogo == null ?  $this->getlogotemp: $this->imgreslogo,

            ]);

        }


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

   if($this->getid){




    setting::where('id',$this->getid)->update([

        'hearoimg'=> $this->hearoimgres == null ?  $this->getheroimgtemp: $this->hearoimgres,

    ]);
   }else{

    setting::create([

        'hearoimg'=> $this->hearoimgres == null ?  $this->getheroimgtemp: $this->hearoimgres,

    ]);

   }
        $this->dispatch('hearoimg-updated');





    }


    public function updatehearocontent() {



        $this->validate();

       if($this->getid){

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

       }else{
        setting::create([

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



       }
        $this->dispatch('hearocon-updated');

    }


    public function updatesochail() {

        $this->validate();

        if($this->sochail_id){

            sochail::where('id',$this->sochail_id)->update([



                'facebook' => $this->facebook,
                'gmail' => $this->gmail,
                'youtube' => $this->youtube,
                'twitter' => $this->twitter,
                'telgram' => $this->telgram,
                'whatsup' => $this->whatsup,
                'tictok' => $this->tictok,
                'linkedin' => $this->linkedin,



             ]) ;
        }else{

            sochail::create([



                'facebook' => $this->facebook,
                'gmail' => $this->gmail,
                'youtube' => $this->youtube,
                'twitter' => $this->twitter,
                'telgram' => $this->telgram,
                'whatsup' => $this->whatsup,
                'tictok' => $this->tictok,
                'linkedin' => $this->linkedin,



             ]) ;

        }



        $this->dispatch('socail-updated');


    }


}
