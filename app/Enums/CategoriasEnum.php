<?php

namespace App\Enums;

use Illuminate\Support\Str;

enum CategoriasEnum: string
{
    case EquipoDeComputo = 'equipo_de_computo';
    case Impresion = 'impresion';
    case RedesyTelecomunicaciones = 'redes_y_telecomunicaciones';
    case EquiposDeAudioyVideo = 'equipos_de_audio_y_video';
    case PerifericosyAccesorios = 'perifericos_y_accesorios';
    case SiteyDatacenter = 'site_y_datacenter';

    public function title(): string
    {
        return preg_replace_callback('/\b\w+\b/', function($match) {
            if (strpos($match[0], 'y') !== false) {
                return $match[0];
            } else {
                return Str::title($match[0]);
            }
        }, str_replace('_', ' ', $this->value));
    }

    public function name(): string
    {
        return Str::lower($this->value);
    }
}
