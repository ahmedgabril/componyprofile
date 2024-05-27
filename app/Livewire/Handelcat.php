<?php

namespace App\Livewire;


use Livewire\Attributes\Lazy;
use Livewire\Component;
use App\Models\catogery;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;


class Handelcat extends Component
{

use WithPagination;
  #[Layout('layouts.app')]

  #[Validate]

public $sortdir = 'desc';
public $catogery_id;
public $name_en;
public $paginate = 10;
public $name_ar;

#[Url(except: ' ',keep: true,history: true)]
public $search = '';
public function updatingSearch()
{
    $this->resetPage();

}




// public function placeholder()
// {


//     return view('components.placeholder');
// }
public function rules()
{
    return [
        'name_en' => 'required|min:5|max:255',
        'name_ar' => 'required|min:5|max:255',
    ];
}

    public function render()
    {



        return view('livewire.handelcat',[



            'catogeries'=> catogery::where('name->en', 'like', '%'.$this->search.'%')

            -> orderBy('id', $this->sortdir)->paginate($this->paginate),


        ]);
    }



    public function addcatogery()  {

            $this->validate();
        catogery::create([
            'name' => [
               'en' => $this->name_en,
               'ar' => $this->name_ar
            ],
        ]);
        $this->resetvalue();
        $this->dispatch('categoryAdded'); // Emit an event for closing the modal


    }


                #[On('editcatogery')]
        public function editcatogery($catogeryid) {
            $this->catogery_id = $catogeryid;
            $getcatogery = catogery::find($catogeryid);


            $this->name_ar = implode($getcatogery->getTranslations('name', ['ar']),) ;




    $this->name_en = implode($getcatogery->getTranslations('name', ['en']),) ;






        }
            public function updatecatogery() {

             $this->validate([
                'name_en' => 'required|min:5|max:255',
                'name_ar' => 'required|min:5|max:255',

            ]);
           $getres=  catogery::findOrFail($this->catogery_id);
            $getres->update([
                'name' => [
                    'en' => $this->name_en,
                    'ar' =>$this->name_ar
                ],
            ]);
            $this->dispatch('close-modal','handelcat');
            $this->dispatch('catogery-updated');

            }

        #[On('confirmdel')]
        public function confirmdel($category_id) {




      $delcat = catogery::find($category_id);
      $delcat->delete();

   $this->dispatch('catogerydeleted');
        }

    public function deleteconfirm($catid) {



        $this->dispatch('deletecat', $catid);


    }

public function resetvalue() {



 $this->resetValidation();
 $this->resetErrorBag();
$this->name_ar = '';
$this->name_en = '';
}
}
