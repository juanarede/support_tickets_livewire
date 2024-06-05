<?php

namespace App\Enums;

use Illuminate\Support\Str;

enum PrioridadClienteEnum: string
{
    case Alta = 'alta';
    case Media = 'media';
    case Baja = 'baja';

    public function title(): string
    {
        return Str::title($this->name);
    }

    public function name(): string
    {
        return Str::lower($this->name);
    }
}
