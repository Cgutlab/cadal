<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen',600);
            $table->string('titulo',100);
            $table->string('subtitulo',1000);
            
            $table->enum('seccion',['inyeccion','impresion', 'matricerio']);
            $table->string('contenido',800);

            $table->string('orden',10);
            
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
