<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    protected $table = 'administradors';     
    protected $fillable = [        
        'nombreRut_Adm',         
        'nombre',         
        'cargo',
        'correo',
        'clave'    
    ]; 
}
