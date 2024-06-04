<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdjuntoTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'IdTicket', 'Fecha_de_Creacion', 'UsuarioRemitente', 'EmailRemitente', 'UsuarioAsignado',
        'EmailUsuarioAsignado', 'urlAdjunto', 'tipoarchivo'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'IdTicket');
    }
}
