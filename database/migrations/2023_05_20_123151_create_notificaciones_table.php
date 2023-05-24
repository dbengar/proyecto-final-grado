<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes-bot', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->decimal('umbral_humedad', 5, 2);
            $table->string('tipo_notificacion');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');            
            $table->integer('id_planta')->unsigned();
            $table->foreign('id_planta')->references('id')->on('planta');            
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
        Schema::dropIfExists('notificaciones');
    }
}
