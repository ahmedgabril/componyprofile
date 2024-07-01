<?php

namespace App\Livewire;


use App\Models\catogery;
use App\Models\project;
use App\Models\serves;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashbord extends Component
{
#[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.dashbord',[

         'allproject' => project::orderBy('id', 'desc')->take(3)->get(),
         'allserv' => serves::orderBy('id', 'desc')->take(3)->get(),
         'allcat' => catogery::orderBy('id', 'desc')->take(3)->get(),

        ]);
    }
}
