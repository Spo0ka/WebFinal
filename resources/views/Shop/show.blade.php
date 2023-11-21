@extends('layouts.app')

@section('container')
<link rel="stylesheet" href="{{ asset('css/styleJersey.css') }}">
<div class="flex-container container" style="height: auto;">
    <div class="left-div">
        <div class="small-images">
          {{-- aqui debian ir las imagens pequeñas pero no me quize meter muchas urls porque de porsi me confundo --}}
        </div>
        <img src="{{ $jersey->image }}" class="mx-4" alt="Jersey Grande">
    </div>
    <div class="border-start">
        <h1 class="ms-4">{{ $jersey->name }}</h1>
        <p class="price ms-4" style="color: #A58721;">${{ $jersey->price }}</p>
        <p class="ms-4">{{ $jersey->description }}</p>
        <div class="sizes mb-2 text-center">
            <div class="sizes mb-2 text-center">
                <div class="size ms-4 border border-black">S</div>
                <div class="size ms-4 border border-black">M</div>
                <div class="size ms-4 border border-black">L</div>
                <div class="size ms-4 border border-black">XL</div>
                <div class="size ms-4 border border-black">XXL</div>
            </div>
        </div>
        <button class="add-to-cart ms-4">Add to Cart</button>
    </div>
</div>

<footer class="bg-white border-top mt-0 text-light text-center py-4">
    <!-- Tu código del footer sigue igual -->
</footer>
@endsection
