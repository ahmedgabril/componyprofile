<?php

namespace App\Livewire;

use App\Models\serves;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Hndelserveies extends Component
{





    use WithFileUploads;
    use WithPagination;
    #[Layout('layouts.app')]

  public $sumnail_status= false;

     public $getlocal;

     public $imgsumnail_temp;
    public $sortdir = 'desc';
    public $getimgpath ;
    public $serveies_id;



  #[Validate('nullable|url')]
    public $youtube_url;



    #[Validate([
        'images' => 'sometimes:image|max:1024',
        'images.*' => [
            'sometimes:image|max:1024',


        ],
    ])]
    public $images = [];


    #[Rule('required|image|max:1024')]
    public $imgsumnail;
    #[Validate([
        'name' => 'required',
        'name.*' => [
            'required',
            'min:5',
            'max:65'

        ],

    ])]
    public $name = [];
    #[Validate([
        'shortdes' => 'required',
        'shortdes.*' => [
            'required',
            'min:20',
            'max:255'

        ],
    ])]
    public $shortdes = [];

    #[Validate([
        'des' => 'required',
        'des.*' => [
            'required',
            'min:20',

        ],


    ])]
    public $des = [];
    public $paginate = 5;


    #[Url(except: ' ',keep: true,history: true)]
    public $search = '';
    public function updatingSearch()
    {
        $this->resetPage();

    }

  public function changstatus(){

    $this->sumnail_status = true;
  }

    public function render()
    {
        return view('livewire.hndelserveies');
    }


    #[Computed]
    public function getserveies(){
    return      serves::where('name', 'like', '%'.$this->search.'%')
    -> orderBy('id', $this->sortdir)->paginate($this->paginate);

    }


    public function addserveies()  {



        $validated = $this->validate();
        $this->getlocal = app()->getLocale() == "en" ? $this->name['en']: $this->name['ar'];

        if(!empty($this->images)) {
            foreach ($this->images as $key => $photos) {
     $this->images[$key] = $photos->store('images/'.$this->getlocal,'public');



            }
        }

   $this->images = json_encode($this->images);


       serves::create([
        'name' => [
           'en' => $this->name['en'],
           'ar' => $this->name['ar'],
        ],

         'shortdes' => [
            'en' => $this->shortdes['en'],
            'ar' => $this->shortdes['ar']
         ],
         'des' => [
            'en' => $this->des['en'],
            'ar' => $this->des['ar']
         ],
         'youtube_url' => $this->youtube_url,
         'imgsumnail'=> $this->imgsumnail->store('imgsumnail/'.$this->getlocal,'public'),
         'images'=>  $this->images,

    ]);






    $this->resetvalue();
    $this->dispatch('close-modal','add-serveies');
    $this->dispatch('serv-aadded'); // Emit an event for closing the modal


}


public function removeimg($key ,$path) {


    Storage::deleteDirectory('public/'.$path);
    $getpath = serves::where('id', $this->serveies_id)->value('images');

    // Decode the JSON data (assuming it's stored as JSON)
    $imagesArray = json_decode($getpath, true);

    // Check if the desired path exists in the array
    if (in_array($path, $imagesArray)) {
        // Remove the path from the array
        $updatedArray = array_diff($imagesArray, [$path]);

        // Update the database record with the modified array
        serves::where('id', $this->serveies_id)->update(['images' => json_encode($updatedArray)]);
        unset($this->images[$key]);
    }

            // $this->images = json_encode($this->images);




    //array_splice($this->screenshots,$key);

    //unset($this->images[$key])








}
#[On('editserv')]
public function editserv($proj_id) {



    $this->serveies_id = $proj_id;
    $getproj = serves::find($proj_id);


    $this->name['ar'] =$getproj->getTranslation('name','ar');
    $this->name['en'] = $getproj->getTranslation('name', 'en');


    $this->des['en'] = $getproj->getTranslation('des', 'en');

    $this->des['ar'] = $getproj->getTranslation('des', 'ar') ;

    $this->shortdes['en'] = $getproj->getTranslation('shortdes', 'en');

    $this->shortdes['ar'] = $getproj->getTranslation('shortdes', 'ar') ;

    $this->youtube_url = $getproj->youtube_url;


    $this->imgsumnail_temp = $getproj->imgsumnail;
    $this->images =  json_decode($getproj->images,true);

    $this->dispatch('edit-des');







}

public function updateserv () {



    $this->validate([

            'imgsumnail'=> 'sometimes:image|max:1024',

    ]);


    $getres=  serves::findOrFail($this->serveies_id);


    // $this->getlocal = app()->getLocale() == "en" ? $this->name['en']: $this->name['ar'];


    if( !empty($this->imgsumnail) && $this->imgsumnail !==  $getres->imgsumnail){



        Storage::deleteDirectory('public/imgsumnail/'.$getres->name);


       $this->getimgpath =  $this->imgsumnail->store('imgsumnail/'.$getres->name,'public');

        }else{

            $this->getimgpath =   $this->imgsumnail_temp;
        }






 if( $this->images !==  json_decode($getres->images,true)) {

    Storage::deleteDirectory('public/images/'.$getres->name);


        foreach ($this->images as $key => $photos) {

            $this->images[$key] = $photos->store('images/'.$getres->name,'public');




        }



}

  $this->images = json_encode($this->images);


   $getres->update([
    'name' => [
        'en' => $this->name['en'],
        'ar' => $this->name['ar'],
     ],

      'shortdes' => [
         'en' => $this->shortdes['en'],
         'ar' => $this->shortdes['ar']
      ],
      'des' => [
         'en' => $this->des['en'],
         'ar' => $this->des['ar']
      ],

      'youtube_url' => $this->youtube_url,

      'imgsumnail'=> $this->getimgpath == null ? $this->imgsumnail_temp: $this->getimgpath,
      'images'=>  $this->images,

   ]);

   $this->dispatch('close-modal','update-serveies');
   $this->dispatch('serv-updated');


   $this->resetvalue();
   $this->sumnail_status = false;
   }

    #[On('confirmdel')]
    public function confirmdel($data) {


     $serv = serves::find($data['servid']);

     Storage::deleteDirectory('public/images/'.$data['proname']);
     Storage::deleteDirectory('public/imgsumnail/'.$data['proname']);


     $serv->delete();

        $this->dispatch('servdeleted');
            }
    public function deleteconfirm($serv_id, $servname) {



        $this->dispatch('deleteserv',servid : $serv_id ,servname: $servname);


    }

    #[On('resetvalue')]
    public function resetvalue() {




    $this->name = [];
    $this->shortdes = [];
    $this->des = [];
    $this->imgsumnail = null;
    $this->images = [];
    $this->youtube_url = '';
    $this->resetValidation();
    $this->resetErrorBag();

   }
}
