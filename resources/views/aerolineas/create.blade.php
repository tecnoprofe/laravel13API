@extends('layouts.dashboard')

@section('content')

<form action="{{ route('aerolineas.store') }}" method="POST">
    @csrf
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="">
    <br>    
    
    <button type="submit">Enviar</button>
</form>

@endsection