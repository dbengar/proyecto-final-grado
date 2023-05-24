<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TipoDePlanta;

class Planta extends Model
{
    protected $table = 'planta';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        
        'nombre',
        'descripcion',
        'tipo_de_planta',
        'imagen',
        'fecha_plantacion',
        'humedad_actual',
    ];

    public function tipoPlanta()
    {
        return $this->belongsTo(TipoDePlanta::class, 'tipo_de_planta', 'name');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
