<?php

namespace App\Livewire;

use App\Models\about;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Validation\ValidationException;

class Handelabout extends Component
{

    #[Layout("layouts.app")]
    public $about_id;

    #[Validate( [


        'des' => 'required',
       'des.*' => [
        'required',
        'min:10',


    ]],)]
                public function mount()  {

                    $getabout=  about::first();
                    $this->des['ar']=$getabout?->getTranslation('des','ar');
                    $this->des['en']=$getabout?->getTranslation('des','en');
                    $this->about_id= $getabout?->id;



                }

     public $des = [];






    public function render()
    {

        return view('livewire.handelabout');
    }








    public function updateabout(){


     $this->validate();

        //    try {
        //     $validatedData = $this->validate();
        //     // Your update logic here
        // } catch (ValidationException $e) {
        //    dd($e->getMessage());
        //     throw $e;
        // }

        if($this->about_id){

            about::where('id',$this->about_id)->update([

                 'des' =>[


                    'en'=> $this->des['en'],
                    'ar'=> $this->des['ar'],
                 ],

             ]);
        }else{

            about::create([

                'des' =>[

                   'en'=> $this->des['en'],
                   'ar'=> $this->des['ar'],
                ],

            ]);

        }


        $this->dispatch('about-updated');


    }
}
