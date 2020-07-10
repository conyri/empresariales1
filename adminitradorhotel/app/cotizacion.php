<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cotizacion extends Model
{
    protected $table = 'cotizacion';     
    protected $fillable = [        
        'id_cot',         
        'Rut',         
        'nombre',
        'apellido',
        'correo',
        'tipo_hab',
        'Fecha_E',
        'Fecha_S',
        'cant_per',
        'adm'    
    ];
}
