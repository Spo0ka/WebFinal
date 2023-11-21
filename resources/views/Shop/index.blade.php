@extends('layouts.app')

@section('container')
    <link rel="stylesheet" href="{{ asset('css//styleshop.css') }}">
    <div class="image-container">
        <div class="top-images" style="display: flex; flex-wrap: wrap;">
            @forelse($jerseys as $jersey)
                <div class="image-wrapper">
                    <a href="{{ route('jerseys.show', $jersey->id) }}">
                        <img src="{{ asset($jersey->image) }}" alt="{{ $jersey->name }}" class="custom-image mx-4 border border-black">
                    </a>
                    <div class="image-text1">
                        <p class="jersey-name">{{ $jersey->name }}</p>
                        <p class="jersey-price">${{ $jersey->price }}</p>
                    </div>
                </div>
                @empty
                    <tr>
                        <td colspan="3">No hay Jersey.</td>
                    </tr>
                @endforelse
        </div>
    </div>
@endsection