<?php

namespace App\Livewire;

use App\Models\project;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class Handelproject extends Component
{

    use WithPagination;
    #[Layout('layouts.app')]

    #[Validate]

    public $sortdir = 'desc';
    public $project_id;
    public $name_en;
    public $paginate = 10;
    public $name_ar;

    #[Url(except: ' ',keep: true,history: true)]
    public $search = '';
    public function updatingSearch()
    {
        $this->resetPage();

    }



    public function render()
    {
        return view('livewire.handelproject',[


            'projects'=> project::where('name->en', 'like', '%'.$this->search.'%')

            -> orderBy('id', $this->sortdir)->paginate($this->paginate),

        ]);
    }




    public function addcatogery()  {

        $this->validate();
    project::create([
        'name' => [
           'en' => $this->name_en,
           'ar' => $this->name_ar
        ],
        'title' => [
            'en' => $this->title_en,
            'ar' => $this->title_ar
         ],
         'shortdes' => [
            'en' => $this->shortdes_en,
            'ar' => $this->shortdes_ar
         ],
         'des' => [
            'en' => $this->des_en,
            'ar' => $this->des_ar
         ],
    ]);






    $this->resetvalue();
    $this->dispatch('projAdded'); // Emit an event for closing the modal


}


#[On('editproj')]
public function editcatogery($proj_id) {
    $this->projcet_id = $proj_id;
    $getproj = project::find($proj_id);


    $this->name_ar = implode($getproj->getTranslations('name', ['ar']),) ;

    $this->name_en = implode($getproj->getTranslations('name', ['en']),) ;






}



public function updateproj() {

    $this->validate([
       'name_en' => 'required|min:5|max:255',
       'name_ar' => 'required|min:5|max:255',

   ]);
  $getres=  project::findOrFail($this->catogery_id);
   $getres->update([
       'name' => [
           'en' => $this->name_en,
           'ar' =>$this->name_ar
       ],
   ]);
   $this->dispatch('close-modal','handelproj');
   $this->dispatch('proj-updated');

   }

    #[On('confirmdel')]
    public function confirmdel($proj_id) {




  $proj = project::find($proj_id);
 $proj->delete();

$this->dispatch('projdeleted');
    }
    public function deleteconfirm($proj_id) {



        $this->dispatch('deleteproj', $proj_id);


    }
        public function resetvalue() {



        $this->resetValidation();
        $this->resetErrorBag();
        // $this->name_ar = '';
        // $this->name_en = '';
       }
   }
