<?php

namespace App\Livewire\Layouts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AvatarDropdown extends Component
{
    public $isOpen = false;

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }

    public function render()
    {

        $user = Auth::user();

        $profileImage = $user->getFirstMediaUrl('images', 'thumb');

        return view('components.layouts.avatar-dropdown', [
            'profileImage' => $profileImage,
        ]);
    }
}
