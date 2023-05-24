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
        Schema::table('tipo_de_planta', function (Blueprint $table) {
            $table->dropColumn('rango_humedad_aconsejado');
            $table->decimal('humedad_maxima_aconsejada', 5, 2);
            $table->decimal('humedad_minima_aconsejada', 5, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipo_de_planta', function (Blueprint $table) {
            $table->string('rango_humedad_aconsejado');
            $table->dropColumn('humedad_maxima_aconsejada');
            $table->dropColumn('humedad_minima_aconsejada');
        });
    }
};
