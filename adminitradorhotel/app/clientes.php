<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = 'clientes';     
    protected $fillable = [        
        'Rut',         
        'nombre',         
        'apellido',
        'fono',
        'correo',
        'clave'    
    ];
}
