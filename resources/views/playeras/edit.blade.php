<!-- resources/views/playeras/edit.blade.php -->

@extends('layouts.app')

@section('container')
    <div class="container">
        <h2>Editar Jersey</h2>

        <!-- Tu formulario para editar el jersey aquí -->
        <form action="{{ route('playeras.update', $jersey->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <label for="name">Nombre:</label>
            <input type="text" name="name" class="form-control" value="{{ $jersey->name }}" required>

            <label for="price">Precio:</label>
            <input type="number" name="price" class="form-control" value="{{ $jersey->price }}" required>

            <label for="description">Descripción:</label>
            <textarea name="description" class="form-control" required>{{ $jersey->description }}</textarea>

            <label for="image">URL de la Imagen:</label>
            <input type="url" name="image" class="form-control" value="{{ $jersey->image }}" required>

            <button type="submit" class="btn btn-primary mt-3">Actualizar Jersey</button>
        </form>
    </div>
@endsection
