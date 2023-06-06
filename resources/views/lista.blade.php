@extends('layouts.app')

@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($plantas as $plantaLista)
    <div class="col">
        <div class="card card-plantas" onclick=" window.location.href = '{{ route('verDatosPlanta', ['id' => $plantaLista->id]) }}';">
            <img src="{{ asset('storage') . '/plantas/' . basename($plantaLista->imagen) }}" class="card-img-top img-fluid">
            <div class="card-body">
                <h3 class="card-title"><b>{{ $plantaLista->nombre }}</b></h3>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection