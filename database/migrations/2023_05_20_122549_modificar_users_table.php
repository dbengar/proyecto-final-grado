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
    Schema::table('users', function (Blueprint $table) {
        $table->integer('planta_registrada')->unsigned()->nullable();
        // Agrega otras columnas según tus necesidades
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('planta_registrada');
        // Elimina otras columnas según las agregaste en el método up()
    });
}

};
