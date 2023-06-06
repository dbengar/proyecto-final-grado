<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TipoDePlanta;
use App\Models\Planta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use App\Http\Controllers\HumidityController;



class PlantController extends Controller
{

    public function verTiposDePlanta()
    {
        $tiposDePlanta = TipoDePlanta::all();
        //dd($tiposDePlanta);

        return view('aniadir', compact('tiposDePlanta'));
    }
    public function crearPlanta(Request $request)
    {
        $validatedData = $request->validate([
            'imagen' => 'required|image',
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'fecha' => 'required|date',
            'tipo_planta' => 'required|string'
        ]);
        
        $imagenPath = $request->file('imagen')->store('plantas', 'public');
        $imagenUrl = Storage::url($imagenPath);

        
        
        
        $planta = new Planta;
        $planta->user_id = auth()->id();
        $planta->imagen = $imagenUrl;
        $planta->nombre = $validatedData['nombre'];
        $planta->descripcion = $validatedData['descripcion'];
        $planta->fecha_plantacion = $validatedData['fecha'];
        $planta->tipo_de_planta = $validatedData['tipo_planta'];
        $planta->save();
   

        $user = Auth::user();
        $user->planta_registrada++;
        $user->save();


        return redirect('/lista');
    }

    public function mostrarLista()
    {
        //dd(Planta::all());
        $plantas = Planta::where('user_id', auth()->id())->get();
        return view('lista', compact('plantas'));
    }

    public function mostrarDatosPlanta($id)
    {   

        $planta = Planta::findOrFail($id);
        $humidityController = new HumidityController();
        $humedad = $humidityController->obtenerHumedad();
        return view('verDatosPlanta', compact('planta', 'humedad'));
    }

    public function eliminarPlanta($id)
    {
        $planta = Planta::findOrFail($id);
        $planta->delete();

        $user = Auth::user();
        $user->planta_registrada--;
        $user->save();

        return redirect('/lista');
    }
}