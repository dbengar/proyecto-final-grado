@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('aniadir') }}" enctype="multipart/form-data">
  <div class="formulario">
    @csrf
    <div class="imagen">
      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" name="imagen" accept="image/*" required />
      <img id="imagen-preview" src="#" />
    </div>
    <div>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required /><br /><br />
      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" name="descripcion" required></textarea><br /><br />
      <label for="fecha">Fecha de Plantación:</label>
      <input type="date" id="fecha" name="fecha" required />
    </div>
    <div>
      <label for="tipo_planta">Tipo de Planta:</label>
      <select id="tipo_planta" name="tipo_planta" required>
        <option value="">Seleccione un tipo de planta</option>
        @foreach($tiposDePlanta as $planta)
          <option value="{{ $planta->name }}">  {{ $planta->name }}</option>
        @endforeach
      </select><br /><br />
      <input type="submit" class="boton" value="Registrar Planta" />
    </div>
  </div>
</form>
@endsection