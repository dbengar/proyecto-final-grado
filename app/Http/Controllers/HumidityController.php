<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class HumidityController extends Controller
{
    public function obtenerHumedad()
    {
        $process = new Process(['python', 'lectura_sensor.py']);
        $process->setTimeout(null); // Evita el tiempo de espera por defecto
        $process->start();

        return response()->json(['status' => 'success']);
    }

    public function obtenerHumedadActual()
    {
        $process = new Process(['python', 'lectura_sensor.py']);
        $process->run();

        if (!$process->isSuccessful()) {
            return response()->json(['status' => 'error', 'message' => $process->getErrorOutput()]);
        }

        $humedad = $process->getOutput();
        return response()->json(['status' => 'success', 'humedad' => $humedad]);
    }
}