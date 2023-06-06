<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajesController extends Controller
{
    public function obtenerMensaje($tipo_mensaje)
    {
        $mensaje = MensajeBot::where('tipo_mensaje', $tipo_mensaje)->first();
        return $mensaje;
    }
}
