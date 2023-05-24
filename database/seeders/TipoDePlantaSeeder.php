<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoDePlanta;

class TipoDePlantaSeeder extends Seeder
{
    public function run()
    {
        TipoDePlanta::create([
            'nombre' => 'Helecho de Boston',
            'humedad_maxima_aconsejada' => '80',
            'humedad_minima_aconsejada' => '50',
        ]);

        TipoDePlanta::create([
            'nombre' => 'Cactus',
            'humedad_maxima_aconsejada' => '10',
            'humedad_minima_aconsejada' => '30',
        ]);

        TipoDePlanta::create([
            'nombre' => 'Orquidea',
            'humedad_maxima_aconsejada' => '40',
            'humedad_minima_aconsejada' => '70',
        ]);
        
        TipoDePlanta::create([
            'nombre' => 'Aloe vera',
            'humedad_maxima_aconsejada' => '30',
            'humedad_minima_aconsejada' => '50',
        ]);

        TipoDePlanta::create([
            'nombre' => 'Ficus',
            'humedad_maxima_aconsejada' => '40',
            'humedad_minima_aconsejada' => '60',
        ]);

        TipoDePlanta::create([
            'nombre' => 'Lavanda',
            'humedad_maxima_aconsejada' => '40',
            'humedad_minima_aconsejada' => '60',
        ]);

        TipoDePlanta::create([
            'nombre' => 'Begonia',
            'humedad_maxima_aconsejada' => '40',
            'humedad_minima_aconsejada' => '60',
        ]);

        TipoDePlanta::create([
            'nombre' => 'Patos',
            'humedad_maxima_aconsejada' => '50',
            'humedad_minima_aconsejada' => '70',
        ]);
        
        TipoDePlanta::create([
            'nombre' => 'Calathea',
            'humedad_maxima_aconsejada' => '30',
            'humedad_minima_aconsejada' => '50',
        ]);

        TipoDePlanta::create([
            'nombre' => 'Planta araña',
            'humedad_maxima_aconsejada' => '40',
            'humedad_minima_aconsejada' => '60',
        ]);

        TipoDePlanta::create([
            'nombre' => 'Pilea peperomioides',
            'humedad_maxima_aconsejada' => '50',
            'humedad_minima_aconsejada' => '70',
        ]);

        TipoDePlanta::create([
            'nombre' => 'Suculentas',
            'humedad_maxima_aconsejada' => '30',
            'humedad_minima_aconsejada' => '50',
        ]);

        TipoDePlanta::create([
            'nombre' => 'Hiedra inglesa',
            'humedad_maxima_aconsejada' => '40',
            'humedad_minima_aconsejada' => '60',
        ]);

        TipoDePlanta::create([
            'nombre' => 'Planta de serpiente',
            'humedad_maxima_aconsejada' => '50',
            'humedad_minima_aconsejada' => '70',
        ]);
        
    }
}


