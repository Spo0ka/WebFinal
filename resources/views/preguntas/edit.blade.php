@extends('layouts.app')

@section('container')
    <div class="container">
        <h2>Editar Pregunta</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('preguntas.update', $pregunta->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="question" class="form-label">Pregunta</label>
                <input type="text" class="form-control" id="question" name="question" value="{{ $pregunta->question }}" required>
            </div>

            <div class="mb-3">
                <label for="answer" class="form-label">Respuesta</label>
                <input type="text" class="form-control" id="answer" name="answer" value="{{ $pregunta->answer }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Pregunta</button>
        </form>
    </div>
@endsection
