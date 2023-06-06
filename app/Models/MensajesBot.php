<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MensajesBot extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'mensajes_bot';
    protected $fillable = ['mensaje', 'tipo_mensaje'];
}
