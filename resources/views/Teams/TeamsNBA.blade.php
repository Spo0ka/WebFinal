@extends('layouts.app')

@section('container')
<link rel="stylesheet" href="{{ asset('css//styleshopTeam.css') }}">
<div style="height: 480px; overflow: hidden;">
    <img src="/Images/nba fondo.webp" style="width: 100%; height: 150%; object-fit: cover;" alt="">
</div>
<H1><p class="letrabonita">NBA2K</p></H1>

    <div class="row mb-0">
        <div class="image-div">
            <img src="/Images/PLAYER de rocket.webp" style=" width: 100%; height: 100%;" alt="Imagen 1">
            <div class="image-text1 ">
                <p class="jersey-name mb-0">Bsmoove</p>
            </div>
          
        </div>
        
        <div class="image-div">
            <img src="/Images/PLAYER de rocket.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 2">
             <div class="image-text2">
                <p class="jersey-name mb-0">Feast</p>
            </div>
        </div>
        <div class="image-div">
            <img src="/Images/PLAYER de rocket.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 3">
             <div class="image-text3">
                <p class="jersey-name mb-0">JMONEY</p>
            </div>
        </div>
        <div class="image-div">
            <img src="/Images/Len_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 4">
             <div class="image-text4">
                <p class="jersey-name mb-0">Len</p>
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