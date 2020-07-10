<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class habitaciones extends Model
{
    protected $table = 'habitaciones';     
    protected $fillable = [        
        'N_hab',         
        'tipo',         
        'diadisp',
        'info',
        'cant_p',
        'precio_dia'   
    ];
}
