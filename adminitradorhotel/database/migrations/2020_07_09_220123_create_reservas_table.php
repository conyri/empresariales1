<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {             
            $table->id('N_rsv');
            $table->integer('Rut_client');              
            $table->integer('N_hab');             
            $table->date('fecha_E');
            $table->date('fecha_S');             
            $table->integer('total_dias');
            $table->string('servicios');
            $table->integer('costo_dia');  
            $table->integer('costo_total');  
            $table->integer('descuento');  
            $table->integer('costobruto');  
                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
