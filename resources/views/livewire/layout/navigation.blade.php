<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/login', navigate: true);
    }
}; ?>
<div>

    <li>
        <a href="#" wire:click.prevent="logout"   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600
         dark:text-gray-200 dark:hover:text-white">{{ __('backend.logout') }}</a>
      </li>


</div>
