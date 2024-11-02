<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\catogery;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Rule;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;


class Handelcat extends Component
{




use WithFileUploads;
use WithPagination;



#[Layout('layouts.app')]

public $sortdir = 'desc';

public $catogery_id;
public $icon_status = false;
public $getlocal;
#[Rule([
    'name' => 'required',
    'name.*' => [
        'required',
        'min:5',
        'max:65'

    ],

])]
public $name = [];
public $paginate = 5;

#[Validate('required|image|max:1024')]
public $icon;
public $icon_temp;
public $get_icon_path;
#[Url(except: ' ',keep: true,history: true)]
public $search = '';
public function updatingSearch()
{
    $this->resetPage();

}


public function chang_icon_status(){

    $this->icon_status = true;
  }


// public function placeholder()
// {


//     return view('components.placeholder');
// }

    public function render()
    {



        return view('livewire.handelcat',[



            'catogeries'=> catogery::where('name', 'like', '%'.$this->search.'%')


            -> orderBy('id', $this->sortdir)->paginate($this->paginate),


        ]);
    }



    public function addcatogery()  {


        $valdat = $this->validate();
        $this->getlocal = app()->getLocale() == "en" ? $this->name['en']: $this->name['ar'];

        catogery::create([
            'name' => [
                'en' => $this->name['en'],
                'ar' => $this->name['ar'],
             ],

            'icon'=> $this->icon->store('icon/'.$this->getlocal,'public'),
        ]);
        $this->resetvalue();
        $this->dispatch('categoryAdded'); // Emit an event for closing the modal
        $this->dispatch('close-modal','addcat');

    }


                #[On('editcatogery')]
        public function editcatogery($catogeryid) {
            $this->catogery_id = $catogeryid;
            $getcatogery = catogery::find($catogeryid);


    $this->name['ar'] = $getcatogery->getTranslation('name','ar') ;




    $this->name['en'] = $getcatogery->getTranslation('name','en') ;


        $this->icon_temp =  $getcatogery->icon;



        }
            public function updatecatogery() {


           $getres=  catogery::findOrFail($this->catogery_id);


           if( !empty($this->icon) && $this->icon !==  $getres->icon){



            Storage::deleteDirectory('public/icon/'.$getres->name);


           $this->get_icon_path =  $this->icon->store('icon/'.$getres->name,'public');

            }else{

                $this->get_icon_path =   $this->icon_temp;
            }


            $getres->update([
                'name' => [
                    'en' => $this->name['en'],
                    'ar' =>$this->name['ar']
                ],
                'icon'=>  $this->get_icon_path == null ? $this->icon_temp: $this->get_icon_path,

            ]);
            $this->resetvalue();
            $this->icon_status = false;
            $this->dispatch('close-modal','handelcat');
            $this->dispatch('catogery-updated');

            }

        #[On('confirmdel')]
        public function confirmdel($category_id) {

            $delcat = catogery::find($category_id);
       Storage::deleteDirectory('public/icon/'.$delcat->name);


      $delcat->delete();

   $this->dispatch('catogerydeleted');
        }

    public function deleteconfirm($catid) {



        $this->dispatch('deletecat', $catid);


    }
    #[On('resetvalue')]
public function resetvalue() {



 $this->resetValidation();
 $this->resetErrorBag();
$this->name = [];

$this->icon = '';
}
}
