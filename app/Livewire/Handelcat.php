<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\catogery;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;


class Handelcat extends Component
{
  #[Layout('layouts.app')]

  #[Validate]
public $name_en;

public $name_ar;

public function rules()
{
    return [
        'name_en' => 'required|min:5',
        'name_ar' => 'required|min:5',
    ];
}



    public function render()
    {
        return view('livewire.handelcat');
    }




    public function addcatogery()  {

$this->validate();
        catogery::create([
            'name' => [
               'en' => $this->name_en,
               'ar' => $this->name_ar
            ],
        ]);
$this->reset();
    }
}
