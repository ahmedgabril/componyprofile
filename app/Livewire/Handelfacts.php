<?php

namespace App\Livewire;

use App\Models\fact;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class Handelfacts extends Component
{





         use WithFileUploads;
        use WithPagination;

        #[Layout("layouts.app")]


        public $sortdir = 'desc';
        public $fact_id;
        #[Validate('required')]
        public $number;

        // public $imgtest;

                #[Validate([
                    'name' => 'required',
                    'name.*' => [
                'required',
                'min:5',
                'max:65'

            ],


        ])]
        public $name = [];
        public $paginate = 10;

        #[Validate('required|string')]
        public $icon;


        #[Url(except: ' ',keep: true,history: true)]
        public $search = '';
        public function updatingSearch()
        {
            $this->resetPage();

        }

            public function render()
            {
                return view('livewire.handelfacts',[



                    'facts'=> fact::where('name', 'like', '%'.$this->search.'%')


                    -> orderBy('id', $this->sortdir)->paginate($this->paginate),


                ]);
            }










            public function addfact()  {


                $valdat = $this->validate();


                fact::create([
                    'name' => [
                        'en' => $this->name['en'],
                        'ar' => $this->name['ar'],
                     ],
                     'number'=> $this->number,
                    'icon'=> $this->icon,
                ]);
                $this->resetvalue();
                $this->dispatch('factAdded'); // Emit an event for closing the modal
                $this->dispatch('close-modal','addfact');

            }


                        #[On('editfact')]
                public function editfact($factid) {
                    $this->fact_id = $factid;
                    $getfact = fact::find($factid);


            $this->name['ar'] = $getfact->getTranslation('name','ar') ;




            $this->name['en'] = $getfact->getTranslation('name','en') ;


                $this->icon =  $getfact->icon;
                $this->number =  $getfact->number;


                }
                    public function updatefact() {


                   $getres=  fact::findOrFail($this->fact_id);



                    $getres->update([
                        'name' => [
                            'en' => $this->name['en'],
                            'ar' =>$this->name['ar']
                        ],
                        'number'=> $this->number,
                        'icon'=>  $getres->icon,

                    ]);
                    $this->resetvalue();

                    $this->dispatch('close-modal','updatefact');
                    $this->dispatch('fact-updated');

                    }






                    #[On('confirmdel')]
                    public function confirmdel($fact_id) {

                  $delfact = fact::find($fact_id);


                  $delfact->delete();

               $this->dispatch('factdeleted');
                    }

                public function deleteconfirm($factid) {



                    $this->dispatch('deletefact', $factid);


                }
                #[On('resetvalue')]
            public function resetvalue() {



             $this->resetValidation();
             $this->resetErrorBag();
            $this->name = [];

            $this->icon = '';
            $this->number = '';
            }
        }
