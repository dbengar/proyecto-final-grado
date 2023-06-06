@extends('layouts.app')

@section('content')
    <h1>Interfaz de administración</h1>
<br>
    <h2>Usuarios:</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Nº plantas registradas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->nombre }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->planta_registrada }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <h2>Plantas:</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Imagen</th>
                <th scope="col">Fecha de Plantación</th>
                <th scope="col">Id de Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plantas as $plant)
                <tr>
                    <th scope="row">{{ $plant->id }}</th>
                    <td>{{ $plant->nombre }}</td>
                    <td>{{ $plant->descripcion }}</td>
                    <td><img src="{{ asset('storage') . '/plantas/' . basename($plant->imagen) }}" with="200px" height="200px"/></td>
                    <td>{{ $plant->fecha_plantacion }}</td>
                    <td>{{ $plant->user_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
@endsection
