<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creamos la tabla para almacenar la informacion
        Schema::create('carros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cliente');
            $table->string('H_entrada');
            $table->string('salida');
            
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
        //
    }
}
