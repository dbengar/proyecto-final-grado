<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Eliminar la columna 'tipo_notificacion' de la tabla 'mensajes_bot'
        Schema::table('mensajes_bot', function (Blueprint $table) {
            $table->dropColumn('tipo_notificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Agregar la columna 'tipo_notificacion' de nuevo a la tabla 'mensajes_bot'
        Schema::table('mensajes_bot', function (Blueprint $table) {
            $table->string('tipo_notificacion');
        });
    }
};
