<?php

namespace App\Http\Controllers;
use App\Models\MensajesBot;

use Illuminate\Http\Request;

class MensajesController extends Controller
{
    public function obtenerMensaje($tipo_mensaje)
    {
        $mensaje = MensajesBot::where('tipo_mensaje', $tipo_mensaje)->first();
        if (!$mensaje) {
            return response()->json([
                'status' => 'error',
                'mensaje' => 'No se encontró ningún mensaje para el tipo de mensaje proporcionado.'
            ]);
        }
    
        return response()->json([
            'status' => 'success',
            'mensaje' => $mensaje->mensaje
        ]);
    }
}
