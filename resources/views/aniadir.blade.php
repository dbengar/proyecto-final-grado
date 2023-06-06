@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('aniadir') }}" enctype="multipart/form-data">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body">
            @csrf
            <div class="mb-3">
              <label for="imagen" class="form-label">Imagen:</label>
              <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required />
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required />
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción:</label>
              <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
            </div>
            <div class="mb-3">
              <label for="fecha" class="form-label">Fecha de Plantación:</label>
              <input type="date" class="form-control" id="fecha" name="fecha" required />
            </div>
            <div class="mb-3">
              <label for="tipo_planta" class="form-label">Tipo de Planta:</label>
              <select class="form-select" id="tipo_planta" name="tipo_planta" required>
                <option value="">Seleccione un tipo de planta</option>
                @foreach($tiposDePlanta as $planta)
                  <option value="{{ $planta->name }}">{{ $planta->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn-form">Registrar Planta</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

@endsection