<!-- resources/views/preguntas/create.blade.php -->

@extends('layouts.app')

@section('container')
    <div class="container">
        <h2>Nueva Pregunta</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('preguntas.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="question" class="form-label">Pregunta</label>
                <input type="text" class="form-control" id="question" name="question" required>
            </div>

            <div class="mb-3">
                <label for="answer" class="form-label">Respuesta</label>
                <input type="text" class="form-control" id="answer" name="answer" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Pregunta</button>
        </form>
    </div>
@endsection
