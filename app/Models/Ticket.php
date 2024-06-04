<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'IdTicket', 'Fecha_de_Creacion', 'Fecha_de_Cierre', 'Fecha_de_Actualizacion', 'Asunto',
        'Comentario', 'UsuarioRemitente', 'EmailRemitente', 'UsuarioAsignado', 'EmailUsuarioAsignado',
        'Status', 'idSLA', 'Categoria', 'NumerodeSerie', 'Modelo', 'NumerodeActivo', 'Prioridad', 'PrioridadAgente'
    ];

    public function parent()
    {
        return $this->belongsTo(Ticket::class, 'IdTicket');
    }

    public function children()
    {
        return $this->hasMany(Ticket::class, 'IdTicket');
    }

    public function detalles()
    {
        return $this->hasMany(DetalleTicket::class, 'IdTicket');
    }

    public function adjuntos()
    {
        return $this->hasMany(AdjuntoTicket::class, 'IdTicket');
    }
}
