<?php

namespace App\Livewire;

use App\Models\catogery;
use App\Models\project;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class Handelproject extends Component
{

    use WithFileUploads;
    use WithPagination;
    #[Layout('layouts.app')]



    public $sortdir = 'desc';
    public $project_id;
    #[Rule('required|int')]
    public $catogery_id;


  #[Rule('nullable|url')]
    public $youtube_url;


    #[Rule('nullable|url')]
    public $github_link;
    #[Rule('nullable|url')]
    public $project_link;
    #[Rule([
        'images' => 'sometimes:image|max:1024',
        'images.*' => [
            'sometimes:image|max:1024',


        ],
    ])]
    public $images = [];


    #[Rule('required|image|max:1024')]
    public $imgsumnail;
    #[Rule([
        'name' => 'required',
        'name.*' => [
            'required',
            'min:5',
            'max:65'

        ],

    ])]
    public $name = [];
    #[Rule([
        'shortdes' => 'required',
        'shortdes.*' => [
            'required',
            'min:20',
            'max:255'

        ],
    ])]
    public $shortdes = [];

    #[Rule([
        'des' => 'required',
        'des.*' => [
            'required',
            'min:20',

        ],
    ])]
    public $des = [];
    public $paginate = 10;


    #[Url(except: ' ',keep: true,history: true)]
    public $search = '';
    public function updatingSearch()
    {
        $this->resetPage();

    }



    public function render()
    {
        return view('livewire.handelproject',[


        ]);
    }


    #[Computed]
    public function getproject_id(){

       return catogery::get();

    }

        #[Computed]
        public function getprojects(){

           return project::where('name->en', 'like', '%'.$this->search.'%')
            ->orWhere('name->ar','like', '%'.$this->search.'%')
            -> orderBy('id', $this->sortdir)->paginate($this->paginate);
        }




    public function addproject()  {




        $valdat = $this->validate();

        if(!empty($this->images)) {
            foreach ($this->images as $key => $photos) {
                $this->images[$key] = $photos->store('images','public');



            }
        }

   $this->images = json_encode($this->images);


    project::create([
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
         'project_link' => $this->project_link,
         'catogery_id' => $this->catogery_id,
         'youtube_url' => $this->youtube_url,
         'github_link' => $this->github_link,
         'imgsumnail'=> $this->imgsumnail->store('imgsumnail','public'),
         'images'=>  $this->images,

    ]);






    $this->resetvalue();
    $this->dispatch('close-modal','handel-add-proj');
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
        $this->name[] = '';
        $this->shortdes[] = '';
        $this->des[] = '';
        $this->imgsumnail = '';
        $this->images = [];
        $this->youtube_url = '';
        $this->github_link = '';
        $this->projcet_id='';
        $this->project_link='';

       }
   }
