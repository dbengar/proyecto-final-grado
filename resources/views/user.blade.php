@extends('layouts.app')

@section('content')
  <div class="contenedor">
    <div class="imagen">
      <img src="{{ Auth::user()->user_imagen ? asset('storage/' . Auth::user()->user_imagen) : asset('user_img/user.png') }}" alt="Imagen de perfil">
      <form id="user-form" action="{{ route('actualizar-imagen-perfil') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="user_imagen">Cambiar imagen de perfil:</label>
          <input type="file" name="user_imagen" id="user_imagen" class="form-control">
        </div>
        <button type="submit" class="btn-form">Guardar</button>
      </form>
    </div>

    <div class="contenido">
      <div class="datos">
        <h2 class="titulo">Nombre:</h2>
        <p class="valor">{{ Auth::user()->name }}</p>
        <h2 class="titulo">Email:</h2>
        <p class="valor">{{ Auth::user()->email }}</p>
        <h2 class="titulo">Número de plantas registradas:</h2>
        <p class="valor">{{ Auth::user()->planta_registrada ?? 0 }}</p>
      </div>
      
      <form id="user-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">{{ __('Logout') }}</button>
      </form>
    </div>
  </div>

@endsection