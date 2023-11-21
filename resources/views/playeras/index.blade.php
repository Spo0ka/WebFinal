@extends('layouts.app')

@section('container')
    <div class="container">
        <h2>Jerseys</h2>

        <a href="{{ route('playeras.create') }}" class="btn btn-success mb-3">Agregar Nuevo Jersey</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jerseys as $jersey)
                    <tr>
                        <td>{{ $jersey->id }}</td>
                        <td>{{ $jersey->name }}</td>
                        <td>${{ $jersey->price }}</td>
                        <td>
                            <a href="{{ route('playeras.edit', $jersey->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('playeras.destroy', $jersey->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay jerseys disponibles.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    
@endsection