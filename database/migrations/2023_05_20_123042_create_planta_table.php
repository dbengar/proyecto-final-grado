<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('plantas', function (Blueprint $table) {
        $table->id();
        $table->string('imagen')->nullable();
        $table->string('nombre');
        $table->text('descripcion');
        $table->date('fecha_plantacion');
        $table->integer('humedad_actual');
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
        Schema::dropIfExists('planta');
    }
}
