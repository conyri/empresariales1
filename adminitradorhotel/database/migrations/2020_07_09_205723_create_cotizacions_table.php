<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacion', function (Blueprint $table) {             
            $table->id('id_cot');
            $table->integer('Rut');              
            $table->string('nombre',40);             
            $table->string('apellido',40);
            $table->string('correo');             
            $table->string('tipo_hab');             
            $table->date('Fecha_E');
            $table->date('Fecha_S');
            $table->integer('cant_per');
            $table->string('adm');
            $table->timestamps();      
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacion');
    }
}
