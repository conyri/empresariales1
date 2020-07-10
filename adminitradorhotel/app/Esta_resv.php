<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Esta_resv extends Model
{
    protected $table = 'esta_resv';     
    protected $fillable = [        
        'id_est',         
        'reserva',         
        'estado',
        'admin'    
    ];
}
