@extends('layouts.app')

@section('content')

  <div class="contenedor">
    <div class="imagen">
      <img src="{{ asset('storage') . '/plantas/' . basename($planta->imagen) }}" class="img-fluid rounded float-start">
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
          <div class="umbral">
            <span class="valor-sub">{{ $planta->tipoPlanta->humedad_maxima_aconsejada }}%</span>
            <span class="valor-sub">-</span>
            <span class="valor-sub">{{ $planta->tipoPlanta->humedad_minima_aconsejada }}%</span>
          </div>
        </div>
      @endif
      <br>
      <div id="mensaje" class="alert alert-primary" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
      </svg>
      
      </div>
    </div>
   
  </div>
    <form method="GET" action="{{ route('editarPlanta', ['id' => $planta->id]) }}">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-primary">Editar Planta</button>
    </form>
   <form id="eliminar-form" method="POST" action="{{ route('eliminarPlanta', ['id' => $planta->id]) }}">
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
      setInterval(obtenerHumedadActual, 5000); 

        function obtenerHumedadActual() {
            $.ajax({
              //Llamamos a la ruta para usar la funcion del controlador
                url: '/obtener-humedad-actual',
                method: 'GET',
                success: function (response) {
                    if (response.status === 'success') {
                      //Obtenemos el valor de humedad de retorno de la funcion
                      
                      var humedad = response.humedad;
                      var valorHumedad = parseInt(humedad.match(/\d+/)[0]);
                      //Valores de la base de datos
                      var minimaAconsejada = parseInt("{{ $planta->tipoPlanta->humedad_minima_aconsejada }}");
                      var maximaAconsejada = parseInt("{{ $planta->tipoPlanta->humedad_maxima_aconsejada }}");
                      if (isFinite(valorHumedad)) {
                        //$('#humedad-valor').text(valorHumedad);
                        $('#barra-progreso').val(valorHumedad);
                        if (valorHumedad < maximaAconsejada) {
                          
                          setTimeout(function() {
                            obtenerMensaje('humedad_baja');
                            $('#mensaje').removeClass().addClass('alert-primary');
                            
                          }, 0);
                        } else if (valorHumedad >= maximaAconsejada && valorHumedad <= minimaAconsejada) {
                          
                          setTimeout(function() {
                            obtenerMensaje('humedad_correcta');
                            $('#mensaje').removeClass().addClass('alert-success');
                          }, 0);
                        } else {
                          
                          setTimeout(function() {
                            obtenerMensaje('humedad_alta');
                            $('#mensaje').removeClass().addClass('alert-danger');
                          }, 0);
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

        function obtenerMensaje(tipo_mensaje) {
          $.ajax({
              url: '/obtener-mensaje/' + tipo_mensaje,
              method: 'GET',
              success: function (response) {
                  if (response.status === 'success') {
                      var mensaje = response.mensaje;
                      $('#mensaje').text(mensaje);
                  } else {
                      console.error('Error al obtener el mensaje: ' + response.message);
                  }
              },
              error: function (xhr, status, error) {
                  console.error('Error de AJAX: ' + error);
              }
          });
        }
        document.getElementById('eliminar-form').addEventListener('submit', function(event) {
          var confirmacion = confirm('¿Estás seguro de que deseas eliminar esta planta? Esta acción no se puede deshacer.');

          if (!confirmacion) {
            event.preventDefault(); 
          }
        });
    });
  </script>
  
@endsection

