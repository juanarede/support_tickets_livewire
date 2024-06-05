<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class AvatarDropdown extends Component
{
    public $isOpen = false;

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render()
    {
        return view('components.layouts.avatar-dropdown');

    }
}
