@extends('layouts.app')

@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($plantas as $plantaLista)
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('storage') . '/plantas/' . basename($plantaLista->imagen) }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $plantaLista->nombre }}</h5>
                <form method="GET" action="{{ route('verDatosPlanta', ['id' => $plantaLista->id]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Ver planta</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection