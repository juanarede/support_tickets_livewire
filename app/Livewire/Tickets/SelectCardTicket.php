<?php

namespace App\Livewire\Tickets;

use Livewire\Component;
use App\Enums\CategoriasEnum;

class SelectCardTicket extends Component
{
    public function render()
    {
        $categorias = CategoriasEnum::cases(); // Accede a las categorías de la enumeración

        return view('livewire.tickets.select-card-ticket')
                ->layout('components.layouts.home')
                ->title('Select Card Ticket')
                ->with('categorias', $categorias); // Pasa las categorías a la vista
    }
}
