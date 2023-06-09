@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('actualizarPlanta', ['id' => $planta->id]) }}" enctype="multipart/form-data">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-body">
                                @csrf
                                @method('PUT')

                                <!-- Campos del formulario de edición -->
                                <div class="mb-3">
                                    <label for="imagen" class="form-label">Imagen:</label>
                                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required />
                                </div>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $planta->nombre }}" required />
                                </div>
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Descripción:</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $planta->descripcion }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="tipo_planta">Tipo de Planta:</label>
                                    <select class="form-select" name="tipo_planta" id="tipo_planta" required>
                                        @foreach ($tiposDePlanta as $tipo)
                                            <option value="{{ $tipo->name }}" @if ($tipo->name == $planta->tipo_de_planta) selected @endif>{{ $tipo->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Resto de campos del formulario -->

                                <button type="submit" class="btn btn-form">Actualizar Planta</button>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </form>
@endsection
