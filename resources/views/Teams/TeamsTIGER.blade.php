@extends('layouts.app')

@section('container')
<link rel="stylesheet" href="{{ asset('css//styleshopTeam.css') }}">
<div style="height: 480px; overflow: hidden;">
    <img src="/Images/tiger fondo.webp" style="width: 100%; height: 100%; object-fit: cover;" alt="">
</div>
<H1><p class="letrabonita">SEOUL DYNASTY</p></H1>

    <div class="row mb-0">
        <div class="image-div">
            <img src="/Images/Profit_af3c328e-0ebb-4901-b895-4fdc5272d223_500x.webp" style=" width: 100%; height: 100%;" alt="Imagen 1">
            <div class="image-text1 ">
                <p class="jersey-name mb-0">Profit</p>
            </div>
        </div>
        
        <div class="image-div">
            <img src="/Images/Prophet_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 2">
             <div class="image-text2">
                <p class="jersey-name mb-0">Prophet</p>
            </div>
        </div>
        <div class="image-div">
            <img src="/Images/Void_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 3">
             <div class="image-text3">
                <p class="jersey-name mb-0">Void</p>
            </div>
        </div>
        <div class="image-div">
            <img src="/Images/Krillin_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 4">
             <div class="image-text4">
                <p class="jersey-name mb-0">Krillin</p>
            </div>
        </div>
    </div>
    <div class="row mt-0">
        <div class="image-div">
            <img src="/Images/LeeSooMin_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 5">
             <div class="image-text5">
                <p class="jersey-name mb-0">LeeSoonMin</p>
            </div>
        </div>
        <div class="image-div">
            <img src="/Images/tobi_fbbdfa1f-0457-4ae0-8945-c099561a2cae_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 6">
             <div class="image-text6">
                <p class="jersey-name mb-0">Tobi</p>
                <p class="jersey-price">HEAD COUCH</p>
            </div>
        </div>
        <div class="image-div">
            <img src="/Images/MMA_d16def9f-e960-4b8f-b778-16b6a6c48329_500x.webp" style="height: 100%;
            width: 100%; " alt="Imagen 7">
             <div class="image-text7">
                <p class="jersey-name mb-0">MMA</p>
                <p class="jersey-price">COUCH</p>
            </div>
        </div>
        <div class="image-div">
            <img src="/Images/SD_Scout_Lime_2021ver_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 8">
             <div class="image-text8">
                <p class="jersey-name mb-0">Lime</p>
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