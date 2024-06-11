<?php

namespace App\Livewire;

use App\Models\team;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

class Handelteam extends Component
{

    use WithFileUploads;
    use WithPagination;

    #[Layout("layouts.app")]


    public $sortdir = 'desc';
    public $team_id;
    public $getavatartemp;
    public $imgresavatar;
    #[Validate('sometimes|image|max:1024')]
    public $avatar;

    // public $imgtest;

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
        'gob' => 'required',
        'gob.*' => [
    'required',
    'min:5',
    'max:65'

],

])]
    public $gob = [];
    public $paginate = 5;



    #[Url(except: ' ',keep: true,history: true)]
    public $search = '';
    public function updatingSearch()
    {
        $this->resetPage();

    }

    public function render()
    {
        return view('livewire.handelteam',[


            'teams'=> team::where('name', 'like', '%'.$this->search.'%')


            -> orderBy('id', $this->sortdir)->paginate($this->paginate),

        ]);
    }






    public function addteam(){

        $this->validate();
        $this->getlocal = app()->getLocale() == "en" ? $this->name['en']: $this->name['ar'];



        team::create([
            'name' => [
                'en' => $this->name['en'],
                'ar' => $this->name['ar'],
             ],

             'gob' => [
                'en' => $this->gob['en'],
                'ar' => $this->gob['ar'],
             ],

            'avatar'=>  $this->avatar->store('avatar/'.$this->getlocal,'public'),
        ]);

        $this->dispatch('teamadded'); // Emit an event for closing the modal
        $this->dispatch('close-modal','addteam');
        $this->resetvalue();

    }



    #[On('editteam')]
public function editteam($team_id) {



    $this->team_id = $team_id;
    $getteam = team::find($team_id);


    $this->name['ar'] = $getteam->getTranslation('name','ar') ;
    $this->name['en'] = $getteam->getTranslation('name', 'en');


    $this->gob['en'] = $getteam->getTranslation('gob', 'en');

    $this->gob['ar'] = $getteam->getTranslation('gob', 'ar') ;

    $this->getavatartemp = $getteam->avatar;


}



public function updateteam() {





    $getres=  team::findOrFail($this->team_id);


    // $this->getlocal = app()->getLocale() == "en" ? $this->name['en']: $this->name['ar'];


    if( !empty($this->avatar) && $this->avatar !==  $getres->avatar){



            Storage::deleteDirectory('public/avatar/'.$getres->name);
            $this->imgresavatar =  $this->avatar->store('avatar/'.$getres->name,'public');

        }else{

            $this->imgresavatar = $this->getavatartemp;

        }

   $getres->update([
    'name' => [
        'en' => $this->name['en'],
        'ar' => $this->name['ar'],
     ],

      'gob' => [
         'en' => $this->gob['en'],
         'ar' => $this->gob['ar']
      ],

      'avatar'=> $this->imgresavatar == null ? $this->getavatartemp: $this->imgresavatar,


   ]);


   $this->dispatch('team-updated');
   $this->dispatch('close-modal','updateteam');

   $this->resetvalue();

   }






           #[On('confirmdel')]
            public function confirmdel($team_id) {

        $delteam = team::find($team_id);


        $delteam->delete();

        $this->dispatch('teamdeleted');
            }

     public function deleteconfirm($teamid) {



    $this->dispatch('deleteteam', $teamid);


}

    #[On('resetvalue')]
    public function resetvalue() {



     $this->resetValidation();
     $this->resetErrorBag();
    $this->name = [];
    $this->gob = [];
    $this->avatar = '';

    }
}
