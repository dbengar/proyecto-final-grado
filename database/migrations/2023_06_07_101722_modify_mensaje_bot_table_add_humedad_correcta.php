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
            $table->string('tipo_mensaje')->default('humedad_correcta')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mensajes_bot', function (Blueprint $table) {
            $table->string('tipo_mensaje')->default('humedad_baja')->change();
        });
    }
};
