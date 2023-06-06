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
        // Renombrar la columna 'umbral_humedad' a 'mensaje'
        Schema::table('mensajes_bot', function (Blueprint $table) {
            $table->renameColumn('umbral_humedad', 'mensaje');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Revertir el cambio y volver a nombrar la columna 'mensaje' a 'umbral_humedad'
        Schema::table('mensajes_bot', function (Blueprint $table) {
            $table->renameColumn('mensaje', 'umbral_humedad');
        });
    }
};
