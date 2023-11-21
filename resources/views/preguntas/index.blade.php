@extends('layouts.app')

@section('container')
    <div class="container">
        <h2>Gestión de Preguntas</h2>

        <a href="{{ route('preguntas.create') }}" class="btn btn-success mb-3">Nueva Pregunta</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($preguntas as $pregunta)
                    <tr>
                        <td>{{ $pregunta->id }}</td>
                        <td>{{ $pregunta->question }}</td>
                        <td>{{ $pregunta->answer }}</td>
                        <td>
                            <a href="{{ route('preguntas.edit', $pregunta->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('preguntas.destroy', $pregunta->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No hay preguntas disponibles.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
