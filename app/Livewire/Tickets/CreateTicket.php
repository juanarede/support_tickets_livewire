<?php

namespace App\Livewire\Tickets;

use App\Enums\EstatusEnum;
use App\Enums\PrioridadAgenteEnum;
use App\Enums\PrioridadClienteEnum;
use Livewire\Component;

class CreateTicket extends Component
{
    public $category;

    protected $listeners = ['categorySelected'];

    public function categorySelected($category)
    {
        $this->category = $category;
    }
    public function render()
    {
        return view('livewire.tickets.create-ticket', [
            'category' => $this->category,
            'estatusOptions' => EstatusEnum::cases(),
            'prioridadClienteOptions' => PrioridadClienteEnum::cases(),
            'prioridadAgenteOptions' => PrioridadAgenteEnum::cases(),
        ]);
    }

}
