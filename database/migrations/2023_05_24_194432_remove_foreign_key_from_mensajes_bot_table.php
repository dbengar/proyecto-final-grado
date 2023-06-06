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
        Schema::table('mensajes_bot', function (Blueprint $table) {
            $table->dropForeign('mensajes_bot_id_usuario_foreign');
        });
    }

    public function down()
    {
        Schema::table('mensajes_bot', function (Blueprint $table) {
            // Aquí puedes agregar nuevamente la restricción de clave externa si lo necesitas
        });
    }
};
