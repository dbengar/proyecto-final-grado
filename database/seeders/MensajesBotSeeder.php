<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MensajesBot;

class MensajesBotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MensajesBot::create([
            'mensaje' => 'Su planta tiene el nivel correcto de humedad aconsejada',
            'tipo_mensaje' => 'humedad_correcta'
        ]);

    }
}
