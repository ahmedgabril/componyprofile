<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Home extends Component
{

    #[Layout('layouts.frontend')]

    public $deviceType;

    #[On('setDeviceType')]
    public function setDeviceType($deviceType)

    {


        return $this->deviceType = $deviceType; }
    public function render()
    {
        return view('livewire.home');
    }
}
