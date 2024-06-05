<?php

namespace App\Enums;

use Illuminate\Support\Str;

enum EstatusEnum: string
{
    case Abierto = 'abierto';
    case Cerrado = 'cerrado';
    case Pendiente = 'pendiente';

    public function title(): string
    {
        return Str::title($this->name);
    }

    public function name(): string
    {
        return Str::lower($this->name);
    }
}
