<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    protected $table = 'reservas';     
    protected $fillable = [        
        'N_rsv',         
        'Rut_client',         
        'N_hab',
        'fecha_E',
        'fecha_S',
        'total_dias',
        'servicios',
        'costo_dia',
        'costo_total',
        'descuento',
        'costobruto'    
    ];
}
