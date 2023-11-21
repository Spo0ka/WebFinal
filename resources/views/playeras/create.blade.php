<!-- resources/views/playeras/create.blade.php -->

@extends('layouts.app')

@section('container')
    <div class="container">
        <h2>Agregar Nuevo Jersey</h2>
        
        <form action="{{ route('playeras.store') }}" method="POST">
            @csrf
            <label for="name">Nombre:</label>
            <input type="text" name="name" class="form-control" required>

            <label for="price">Precio:</label>
            <input type="number" name="price" class="form-control" required>

            <label for="description">Descripción:</label>
            <textarea name="description" class="form-control" required></textarea>

            <label for="image">URL de la Imagen:</label>
            <input type="url" name="image" class="form-control" required>

            <button type="submit" class="btn btn-success mt-3">Agregar Jersey</button>
        </form>
    </div>
@endsection
