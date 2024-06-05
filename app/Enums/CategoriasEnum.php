<?php

namespace App\Enums;

use Illuminate\Support\Str;

enum CategoriasEnum: string
{
    case EquipoDeComputo = 'equipo_de_computo';
    case Impresion = 'impresion';
    case RedesYTelecomunicaciones = 'redes_y_telecomunicaciones'; 
    case EquiposDeAudioYVideo = 'equipos_de_audio_y_video';
    case PerifericosYAccesorios = 'perifericos_y_accesorios';
    case SiteYDatacenter = 'site_y_datacenter';

    public function title(): string
    {
        return Str::title($this->name);
    }

    public function name(): string
    {
        return Str::lower($this->name);
    }
}
