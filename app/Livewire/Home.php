<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{

    #[Layout('layouts.frontend')]

    public $deviceType;
    public function setDeviceType($deviceType)

    { $this->deviceType = $deviceType; }
    public function render()
    {
        return view('livewire.home');
    }
}
