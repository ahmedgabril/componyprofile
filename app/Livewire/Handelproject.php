<?php

namespace App\Livewire;

use App\Models\project;
use Livewire\Component;
use App\Models\catogery;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

class Handelproject extends Component
{

    use WithFileUploads;
    use WithPagination;
    #[Layout('layouts.app')]

  public $sumnail_status= false;
     public $getlocal;
     public $imgsumnail_temp;
     public $images_temp =[];
     public $images_path =[];

     public $regs = '#^(?:https?://)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&]{11})#';
     public $sortdir = 'desc';
    public $getimgpath ;
    public $projcet_id;
    #[Validate('required|int')]
    public $catogery_id;


    public $youtube_url;


    #[Validate('nullable|url')]
    public $github_link;
    #[Validate('nullable|url')]
    public $project_link;
    #[Validate]

    public $images = [];


    #[Validate('required|image|max:1024')]
    public $imgsumnail;
    #[Validate]
    public $name = [];
    #[Validate]
    public $shortdes = [];

    #[Validate]
    public $des = [];
    public $paginate = 5;


    #[Url(except: ' ',keep: true,history: true)]
    public $search = '';
    public function updatingSearch()
    {
        $this->resetPage();

    }


    public function rules()
    {
        return [
            'shortdes' => 'required',
            'shortdes.*' => [
                'required',
                'min:20',
                'max:255'

            ],
           'youtube_url' => ['nullable','sometimes', "regex:$this->regs"],
            'name' => 'required',
            'name.*' => [
                'required',
                'min:5',
                'max:65'

            ],


            'images' => 'sometimes:image|max:1024',
            'images.*' => [
                'sometimes:image|max:1024',


            ],

            'des' => 'required',
            'des.*' => [
                'required',
                'min:20',

            ],
        ];
    }

  public function changstatus(){

    $this->sumnail_status = true;
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
        return      project::with('catogery')->where('name', 'like', '%'.$this->search.'%')
        // ->orWhere('name->ar','like', '%'.$this->search.'%')
        -> orderBy('id', $this->sortdir)->paginate($this->paginate);

        }


        public function removeimg($key ,$path) {


                Storage::deleteDirectory('public/'.$path);
                $getpath = project::where('id', $this->projcet_id)->value('images');

                // Decode the JSON data (assuming it's stored as JSON)
                $imagesArray = json_decode($getpath, true);

                // Check if the desired path exists in the array
                if (in_array($path, $imagesArray)) {
                    // Remove the path from the array
                    $updatedArray = array_diff($imagesArray, [$path]);

                    // Update the database record with the modified array
                    project::where('id', $this->projcet_id)->update(['images' => json_encode($updatedArray)]);
                    unset($this->images_temp[$key]);
                }

                        // $this->images = json_encode($this->images);




                //array_splice($this->screenshots,$key);

                //unset($this->images[$key])








            }

    public function addproject()  {


        $this->validate();
        $this->getlocal = app()->getLocale() == "en" ? $this->name['en']: $this->name['ar'];

        if(!empty($this->images)) {
            foreach ($this->images as $key => $photos) {
                $this->images[$key] = $photos->store('images/'.$this->getlocal,'public');



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
         'imgsumnail'=> $this->imgsumnail->store('imgsumnail/'.$this->getlocal,'public'),
         'images'=>  $this->images,

    ]);






    $this->resetvalue();
    $this->dispatch('close-modal','handel-add-proj');
    $this->dispatch('projAdded'); // Emit an event for closing the modal


}


#[On('editproj')]
public function editproj($proj_id) {



    $this->projcet_id = $proj_id;
    $getproj = project::find($proj_id);


    $this->name['ar'] = implode($getproj->getTranslations('name', ['ar']),) ;
    $this->name['en'] = $getproj->getTranslation('name', 'en');


    $this->des['en'] = $getproj->getTranslation('des', 'en');

    $this->des['ar'] = $getproj->getTranslation('des', 'ar') ;

    $this->shortdes['en'] = $getproj->getTranslation('shortdes', 'en');

    $this->shortdes['ar'] = $getproj->getTranslation('shortdes', 'ar') ;
    $this->catogery_id = $getproj->catogery_id;
    $this->youtube_url = $getproj->youtube_url;
    $this->github_link = $getproj->github_link;
    $this->project_link = $getproj->project_link;
    $this->imgsumnail_temp = $getproj->imgsumnail;
    $this->images_temp =  json_decode($getproj->images,true);

   $this->dispatch('edit-des');
    // implode($getproj->getTranslations('name', ['en']),) ;

}



public function updateproj() {

// $this->sumnail_status = true;

    $this->validate([

            'imgsumnail'=> 'sometimes:image|max:1024',
            'youtube_url' => ['nullable','sometimes', "regex:$this->regs"],


    ]);


    $getres=  project::findOrFail($this->projcet_id);


    // $this->getlocal = app()->getLocale() == "en" ? $this->name['en']: $this->name['ar'];


    if( !empty($this->imgsumnail) && $this->imgsumnail !==  $getres->imgsumnail){



        Storage::deleteDirectory('public/imgsumnail/'.$getres->name);


       $this->getimgpath =  $this->imgsumnail->store('imgsumnail/'.$getres->name,'public');

        }else{

            $this->getimgpath =   $this->imgsumnail_temp;
        }

        if(!empty($this->images ) ) {


            if(!empty($this->images ) && !empty($this->images_temp )){

            }else{
                Storage::deleteDirectory('public/images/'.$getres->name);
            }


        foreach ($this->images as $key => $photos) {

      $this->images_path[] =  $this->images[$key] = $photos->store('images/'.$getres->name,'public');


        }



   }else{


    $this->images_path = $this->images_temp;
   }
// $this->images_path = json_encode( $this->images_path);


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
      'project_link' => $this->project_link,
      'catogery_id' => $this->catogery_id,
      'youtube_url' => $this->youtube_url,
      'github_link' => $this->github_link,
      'imgsumnail'=> $this->getimgpath == null ? $this->imgsumnail_temp: $this->getimgpath,
      'images'=>  $this->images_path ,

   ]);

   $this->dispatch('close-modal','updateproj');
   $this->dispatch('proj-updated');


   $this->resetvalue();
   $this->sumnail_status = false;
   }

    #[On('confirmdel')]
    public function confirmdel($data) {


     $proj = project::find($data['projid']);

     Storage::deleteDirectory('public/images/'.$data['proname']);
     Storage::deleteDirectory('public/imgsumnail/'.$data['proname']);


        $proj->delete();

        $this->dispatch('projdeleted');
            }
    public function deleteconfirm($proj_id, $projname) {



        $this->dispatch('deleteproj',projid : $proj_id , proname: $projname);


    }
            #[On('resetvalue')]
        public function resetvalue() {




        $this->name = [];
        $this->shortdes = [];
        $this->des = [];
        $this->imgsumnail = null;
        $this->images = [];
        $this->youtube_url = '';
        $this->github_link = '';
        $this->catogery_id='';
        $this->project_link='';
        $this->resetValidation();
        $this->resetErrorBag();

       }
   }
