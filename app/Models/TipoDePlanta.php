<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDePlanta extends Model
{
    protected $table = 'tipo_de_planta';
    protected $primaryKey = 'name';
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = [
        'humedad_minima_aconsejada',
        'humedad_maxima_aconsejada',
    ];
}
