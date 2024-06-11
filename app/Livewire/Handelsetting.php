<?php

namespace App\Livewire;

use App\Models\info;
use App\Models\hearo;

use App\Models\sochail;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Handelsetting extends Component
{
     use WithFileUploads;

    #[Layout("layouts.app")]


    #[Validate("sometimes|nullable|image|max:1024")]
    public $logo;
    #[Validate("nullable|url")]
     public $facebook  ;
     #[Validate("url")]
      public $linkedin;
      #[Validate("url")]
      public $youtube ;

   public $twitter , $telgram,$tictok,$whatsup,$gmail;
    public $getid;
    public $getinfo_id;
    public $sochail_id;
    public $imgreslogo;
    public $hearoimgres;
    public $getlogotemp;
    public $hearoimg;
    public $getheroimgtemp;
    public $hearotitle = [];
    public $shortdes = [];
    #[Validate([
        'compony_name' => 'required|string',
        'compony_name.*' => [
    'required',
    'min:5',


],

])]
    public $compony_name = [];
    #[Validate([
        'address' => 'nullable|string',
        'address.*' => [
    'nullable',
    'min:5',


],

])]
    public $address = [];






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


         $getdata =  hearo::first();
        $this->shortdes['ar'] = $getdata?->getTranslation('shortdes','ar');
        $this->shortdes['en'] = $getdata?->getTranslation('shortdes','en');
        $this->hearotitle['ar'] = $getdata?->getTranslation('hearotitle','ar');
        $this->hearotitle['en'] = $getdata?->getTranslation('hearotitle','en');
        $this->getid =$getdata?->id;

        $getinfo =  info::first();
        $this->compony_name['ar'] =  $getinfo?->getTranslation('compony_name','ar');
        $this->compony_name['en'] =  $getinfo?->getTranslation('compony_name','en');
        $this->address['en'] =  $getinfo?->getTranslation('address','en');
        $this->address['ar'] =  $getinfo?->getTranslation('address','ar');
        $this->getinfo_id =$getinfo?->id;
    }
    public function render()
    {


        $getinfo =  info::first();
        $gethearo =  hearo::first();
        $this->getlogotemp = $getinfo?->logo;
        $this->getheroimgtemp = $gethearo?->hearoimg;
        return view('livewire.handelsetting');

    }



    public function updateinfo() {



    //   $this->validate();



        if(!empty($this->logo) ){



            Storage::deleteDirectory('public/logo');
            $this->imgreslogo =  $this->logo->store('logo','public');

        }else{

            $this->imgreslogo = $this->getlogotemp;

        }



        if($this->getinfo_id){


            info::where('id',$this->getinfo_id)->update([


                'compony_name' =>

                [
             'en'=> $this->compony_name['en'],
             'ar'=> $this->compony_name['ar'],

                ],

            'address' =>

            [
         'en'=> $this->address['en'],
         'ar'=> $this->address['ar'],

            ],


                'logo' => $this->imgreslogo == null ?  $this->getlogotemp: $this->imgreslogo,

            ]);
        }else{


            info::create([


                'compony_name' =>

                [
             'en'=> $this->compony_name['en'],
             'ar'=> $this->compony_name['ar'],

                ],

            'address' =>

            [
         'en'=> $this->address['en'],
         'ar'=> $this->address['ar'],

            ],


                'logo' => $this->logo->store('logo','public'),

            ]);


        }


        $this->dispatch('info-updated');





    }







    public function updatehearo() {

        // $this->validate();

        if(!empty($this->hearoimg) ){



            Storage::deleteDirectory('public/hearoimg');
            $this->hearoimgres =  $this->hearoimg->store('hearoimg','public');

        }else{

            $this->hearoimgres = $this->getheroimgtemp;

        }

   if($this->getid){




    hearo::where('id',$this->getid)->update([




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



        'hearoimg'=> $this->hearoimgres == null ?  $this->getheroimgtemp: $this->hearoimgres,

    ]);
   }else{

    hearo::create([



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



        'hearoimg'=> $this->hearoimg->store('hearoimg','public'),

    ]);


   }
        $this->dispatch('hearo-updated');





    }


    public function updatehearocontent() {



        $this->validate();

       if($this->getid){

        setting::where('id',$this->getid)->update([




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


            'address' =>

            [
         'en'=> $this->address['en'],
         'ar'=> $this->address['ar'],

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
