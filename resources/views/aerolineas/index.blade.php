@extends('layouts.dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-4">Lista de Aerolíneas</h1>

<a href="{{ route('aerolineas.create') }}" 
style="display: inline-block; padding: 0.5rem 1rem; background-color: #28a745; color: white; text-decoration: none; border-radius: 0.25rem;">Agregar Aerolínea</a>
<ul>
    @foreach ($aerolineas as $aerolinea)
        <li>{{ $aerolinea->nombre }}  
            
            <form action="{{ route('aerolineas.destroy', $aerolinea->id) }}" 
            method="POST" 
            onsubmit="return 
            confirm('¿Seguro que deseas eliminar esta aerolínea?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>

        </li>
    @endforeach
</ul>

@endsection