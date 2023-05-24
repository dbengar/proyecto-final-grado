@extends('layouts.app')

@section('content')
    <div class="contenedor">
      <div class="imagen">
        <img src="{{ asset('storage') . '/plantas/' . basename($planta->imagen) }}">
      </div>
      <div class="datos">
        <h2 id="nombre">Nombre: {{ $planta->nombre }}</h2>
        <p id="descripcion">
            Descripcion <span id="descripcion">{{ $planta->descripcion }}</span>
        </p>
        <p id="fecha">
          Fecha de Plantación: <span id="fecha-plantacion">{{ $planta->fecha_plantacion }}</span>
        </p>
      </div>
            @if($planta->tipoPlanta)
                <div class="humedad">
                    <h2>Humedad</h2>
                    <p id="umbral">
                        Umbral de Humedad: 
                        <span id="umbral-humedad">
                            Máximo: {{ $planta->tipoPlanta->humedad_minima_aconsejada }}
                            Mínimo: {{ $planta->tipoPlanta->humedad_maxima_aconsejada }}
                        </span>
                    </p>
                </div>
            @endif
    </div>
    <form method="POST" action="{{ route('eliminarPlanta', ['id' => $planta->id]) }}">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Eliminar Planta</button>
    </form>

@endsection