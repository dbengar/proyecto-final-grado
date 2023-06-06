@extends('layouts.app')

@section('content')

  <div class="contenedor">
    <div class="imagen">
      <img src="{{ asset('storage') . '/plantas/' . basename($planta->imagen) }}">
    </div>
    <div class="contenido">
      <div class="datos">
        <h2 class="titulo">Nombre:</h2>
        <p class="valor">{{ $planta->nombre }}</p>
        <h2 class="titulo">Descripción:</h2>
        <p class="valor">{{ $planta->descripcion }}</p>
        <h2 class="titulo">Fecha de Plantación:</h2>
        <p class="valor">{{ $planta->fecha_plantacion }}</p>
      </div>
      @if($planta->tipoPlanta)
        <div id="humedad">
          <h2 class="titulo">Humedad:</h2>
          <progress id="barra-progreso" value="0" max="100" title="Mínimo: {{ $planta->tipoPlanta->humedad_minima_aconsejada }} | Máximo: {{ $planta->tipoPlanta->humedad_maxima_aconsejada }}"></progress>
          <p class="valor">Umbral de Humedad:</p>
          <p class="valor-sub">{{ $planta->tipoPlanta->humedad_minima_aconsejada }}</p>
          <p class="valor-sub">{{ $planta->tipoPlanta->humedad_maxima_aconsejada }}</p>
          

        </div>
      @endif
    </div>
  </div>
  <form method="POST" action="{{ route('eliminarPlanta', ['id' => $planta->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar Planta</button>
  </form>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
    // Llamada inicial para obtener la humedad actual
      obtenerHumedadActual();

      // Llamada periódica para obtener la humedad actualizada
      setInterval(obtenerHumedadActual, 5000); // Llama cada 5 segundos (ajusta el intervalo según tus necesidades)

        function obtenerHumedadActual() {
            $.ajax({
                url: '/obtener-humedad-actual',
                method: 'GET',
                success: function (response) {
                    if (response.status === 'success') {
                      var humedad = response.humedad;
                      var valorHumedad = parseInt(humedad.match(/\d+/)[0]);
                      var minimaAconsejada = parseInt("{{ $planta->tipoPlanta->humedad_minima_aconsejada }}");
                      var maximaAconsejada = parseInt("{{ $planta->tipoPlanta->humedad_maxima_aconsejada }}");
                      if (isFinite(valorHumedad)) {
                        $('#humedad-valor').text(valorHumedad);
                        $('#barra-progreso').val(valorHumedad);
                        if (valorHumedad < maximaAconsejada) {
                          $('#barra-progreso').removeClass().addClass('barra-azul');
                        } else if (valorHumedad >=maximaAconsejada && valorHumedad <= minimaAconsejada) {
                          $('#barra-progreso').removeClass().addClass('barra-verde');
                        } else {
                          $('#barra-progreso').removeClass().addClass('barra-roja');
                        }
                      } else {
                        console.error('Valor de humedad no válido: ' + humedad);
                      }
                    } else {
                        console.error('Error al obtener la humedad: ' + response.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error de AJAX: ' + error);
                }
            });
        }
    });
  </script>
  
@endsection

