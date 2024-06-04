<?php

namespace App\Livewire\Tickets;

use Livewire\Component;

class SelectCardTicket extends Component
{
    public function render()
    {
        return view('livewire.tickets.select-card-ticket')
                ->layout('components.layouts.home')
                ->title('Select Card Ticket');

    }
}
