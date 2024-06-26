<?php

namespace App\Models;

use App\Enums\EstatusEnum;
use App\Enums\PrioridadAgenteEnum;
use App\Enums\PrioridadClienteEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Ticket extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'fecha_de_cierre',
        'asunto',
        'comentario',
        'estatus',
        'id_sla',
        'categoria',
        'numero_de_serie',
        'modelo',
        'numero_de_activo',
        'prioridad_cliente',
        'prioridad_agente'
    ];

    protected $casts = [
        'estatus' => EstatusEnum::class,
        'prioridad_cliente' => PrioridadClienteEnum::class,
        'prioridad_agente' => PrioridadAgenteEnum::class,
    ];

    public function parent()
    {
        return $this->belongsTo(Ticket::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Ticket::class, 'parent_id');
    }

    public function mensajes()
    {
        return $this->hasMany(Mensaje::class, 'ticket_id');
    }
}
