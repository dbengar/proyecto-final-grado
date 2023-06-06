<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoDePlanta;

class TipoDePlantaSeeder extends Seeder
{
    public function run()
    {
        TipoDePlanta::create([
            'name' => 'Helecho de Boston',
            'humedad_maxima_aconsejada' => '80',
            'humedad_minima_aconsejada' => '50',
        ]);

        TipoDePlanta::create([
            'name' => 'Cactus',
            'humedad_maxima_aconsejada' => '10',
            'humedad_minima_aconsejada' => '30',
        ]);

        TipoDePlanta::create([
            'name' => 'Orquidea',
            'humedad_maxima_aconsejada' => '40',
            'humedad_minima_aconsejada' => '70',
        ]);
        
        TipoDePlanta::create([
            'name' => 'Aloe vera',
            'humedad_maxima_aconsejada' => '30',
            'humedad_minima_aconsejada' => '50',
        ]);

        TipoDePlanta::create([
            'name' => 'Ficus',
            'humedad_maxima_aconsejada' => '40',
            'humedad_minima_aconsejada' => '60',
        ]);

        TipoDePlanta::create([
            'name' => 'Lavanda',
            'humedad_maxima_aconsejada' => '40',
            'humedad_minima_aconsejada' => '60',
        ]);

        TipoDePlanta::create([
            'name' => 'Begonia',
            'humedad_maxima_aconsejada' => '40',
            'humedad_minima_aconsejada' => '60',
        ]);

        TipoDePlanta::create([
            'name' => 'Patos',
            'humedad_maxima_aconsejada' => '50',
            'humedad_minima_aconsejada' => '70',
        ]);
        
        TipoDePlanta::create([
            'name' => 'Calathea',
            'humedad_maxima_aconsejada' => '30',
            'humedad_minima_aconsejada' => '50',
        ]);

        TipoDePlanta::create([
            'name' => 'Planta araña',
            'humedad_maxima_aconsejada' => '40',
            'humedad_minima_aconsejada' => '60',
        ]);

        TipoDePlanta::create([
            'name' => 'Pilea peperomioides',
            'humedad_maxima_aconsejada' => '50',
            'humedad_minima_aconsejada' => '70',
        ]);

        TipoDePlanta::create([
            'name' => 'Suculentas',
            'humedad_maxima_aconsejada' => '30',
            'humedad_minima_aconsejada' => '50',
        ]);

        TipoDePlanta::create([
            'name' => 'Hiedra inglesa',
            'humedad_maxima_aconsejada' => '40',
            'humedad_minima_aconsejada' => '60',
        ]);

        TipoDePlanta::create([
            'name' => 'Planta de serpiente',
            'humedad_maxima_aconsejada' => '50',
            'humedad_minima_aconsejada' => '70',
        ]);

        TipoDePlanta::create([
            'name' => 'Planta de jade',
            'humedad_maxima_aconsejada' => '30',
            'humedad_minima_aconsejada' => '50',
        ]);

        TipoDePlanta::create([
            'name' => 'Bambú',
            'humedad_maxima_aconsejada' => '60',
            'humedad_minima_aconsejada' => '80',
        ]);

        TipoDePlanta::create([
            'name' => 'Cala',
            'humedad_maxima_aconsejada' => '70',
            'humedad_minima_aconsejada' => '90',
        ]);

        TipoDePlanta::create([
            'name' => 'Crisantemo',
            'humedad_maxima_aconsejada' => '50',
            'humedad_minima_aconsejada' => '70',
        ]);

        TipoDePlanta::create([
            'name' => 'Lirio de paz',
            'humedad_maxima_aconsejada' => '70',
            'humedad_minima_aconsejada' => '90',
        ]);
        
        TipoDePlanta::create([
            'name' => 'Platanera',
            'humedad_maxima_aconsejada' => '70',
            'humedad_minima_aconsejada' => '80',
        ]);

        TipoDePlanta::create([
            'name' => 'Rosal',
            'humedad_maxima_aconsejada' => '60',
            'humedad_minima_aconsejada' => '70',
        ]);
    }
}


