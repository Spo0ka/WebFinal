@extends('layouts.app')

@section('container')
<link rel="stylesheet" href="{{ asset('css//styleshopTeams.css') }}">
<div>
    <img src="/Images/frase geng.jpg" class=" mb-5" style="max-width: 100%; width: 100%; " alt="">
</div>
<div class=" Div-Container container mb-5">
    <div class="row mb-0">
        <div class="image-div border border-black">
            <a href="{{route('TeamsLCK')}}">
            <img src="/Images/lck logo.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 1">
            </a>
        </div>
        <div class="image-div border border-black">
            <a href="{{route('TeamsVALORANT')}}">
            <img src="/Images/valorant logo.png" style="height: 100%;
            width: 100%; "  alt="Imagen 2">
            </a>
        </div>
        <div class="image-div border border-black">
            <a href="{{route('TeamsROCKET')}}">
            <img src="/Images/rocket league logo.png" style="height: 100%;
            width: 100%; "  alt="Imagen 3">
            </a>
        </div>
    </div>
    <div class="row mt-0">
        <div class="image-div border border-black">
            <a href="{{route('TeamsPUBG')}}">
            <img src="/Images/Pubg logo.png" style="height: 100%;
            width: 100%; "  alt="Imagen 4">
            </a>
        </div>
        <div class="image-div border border-black">
            <a href="{{route('TeamsNBA')}}">
            <img src="/Images/NBA-2k-League-Logo-750x375.png" style="height: 100%;
            width: 100%; "  alt="Imagen 5">
            </a>
        </div>
        <div class="image-div border border-black">
            <a href="{{route('TeamsTIGER')}}">
            <img src="/Images/tiger logo.webp" style="height: 100%;
            width: 100%; " alt="Imagen 6">
            </a>
        </div>
    </div>
</div>



<footer class="bg-white border-top mt-0 text-light text-center py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-md-start mt-2">
                <div class="d-flex align-items-center">
                    <img src="/Images/Gen.G_logo.png" alt="Gen.G Logo Footer" class="mx-2" style="max-height: 30px; max-width: 100%;">
                    <a href="https://twitter.com/geng">
                        <img src="/Images/twitter.png" alt="Twitter" class="img-fluid ml-2 mx-2" style="max-width: 30px; max-height: 30px;">
                    </a>
                    <a href="https://www.facebook.com/GenGesports/">
                        <img src="/Images/facebook.png" alt="Facebook" class="img-fluid ml-2 mx-2" style="max-width: 30px; max-height: 30px;">
                    </a>
                    <a href="https://www.instagram.com/gengesports/">
                        <img src="/Images/instagram.png" alt="Instagram" class="img-fluid ml-2 mx-2" style="max-width: 30px; max-height: 30px;">
                    </a>
                    <a href="https://www.twitch.tv/team/geng">
                        <img src="/Images/twitch.png" alt="Twitch" class="img-fluid ml-2 mx-2" style="max-width: 30px; max-height: 30px;">
                    </a>
                    <a href="https://www.twitch.tv/team/geng">
                        <img src="/Images/youtube.png" alt="YouTube" class="img-fluid ml-2 mx-2" style="max-width: 30px; max-height: 30px;">
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-md-right mt-2">
             
            </div>
        </div>
        <p class="mt-4" style="color: #585858;">&copy; 2023 Gen.G. Todos los derechos reservados.</p>
    </div>
</footer>
@endsection
   

