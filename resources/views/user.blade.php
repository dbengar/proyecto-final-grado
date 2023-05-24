@extends('layouts.app')

@section('content')
    <div class="contenedor">
      <div class="imagen">
      <svg width="100px" height="100px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="User / User_Circle"> <path id="Vector" d="M17.2166 19.3323C15.9349 17.9008 14.0727 17 12 17C9.92734 17 8.06492 17.9008 6.7832 19.3323M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11C15 12.6569 13.6569 14 12 14Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
      </div>
      <div class="datos">
        <h2 id="nombre">Nombre: {{ Auth::user()->name }}</h2>
        <p id="email_usuario">
            Email: <span id="email_usuario">{{ Auth::user()->email }}</span>
        </p>
        <p id="n_plantas">
          Número de plantas registradas: <span id="n_plantas">{{ Auth::user()->planta_registrada ?? 0 }}</span>
        </p>
        <form id="user-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">{{ __('Logout') }}</button>
        </form>
      </div>
    </div>
@endsection