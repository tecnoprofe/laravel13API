
@extends('layouts.dashboard')

@section('content')

<form action="{{ route('vuelos.store') }}" method="POST">
    @csrf <!-- ¡OBLIGATORIO PARA LA SEGURIDAD! -->
    
    <input type="text" name="destino">
    <button type="submit">Guardar Vuelo</button>
</form>


@endsection