@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css//styleshopTeam.css') }}">
@section('container')
<div style="height: 480px; overflow: hidden;">
    <img src="/Images/MIS DIOSES.webp" style="width: 100%; height: 130%; object-fit: cover;" alt="">
</div>
<H1><p class="letrabonita">LEAGUE OF LEGENDS</p></H1>
<div class="my-5">
    <div class="row mb-0">
        <div class="image-div">
            <img src="/Images/Doran_500x.webp" style=" width: 100%; height: 100%;" alt="Imagen 1">
            <div class="image-text1">
                <p class="jersey-name mb-0">Doran</p>
                <p class="jersey-price">TOP</p>
            </div>
        </div>
        
        <div class="image-div">
            <img src="/Images/Peanut_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 2">
             <div class="image-text2">
                <p class="jersey-name mb-0">Peanut</p>
                <p class="jersey-price">JG</p>
            </div>
        </div>
        <div class="image-div">
            <img src="/Images/Chovy_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 3">
             <div class="image-text3">
                <p class="jersey-name mb-0">Chovy</p>
                <p class="jersey-price">MID</p>
            </div>
        </div>
        <div class="image-div">
            <img src="/Images/Peyz_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 4">
             <div class="image-text4">
                <p class="jersey-name mb-0">Peyz</p>
                <p class="jersey-price">ADC</p>
            </div>
        </div>
    </div>
    <div class="row mt-0">
        <div class="image-div">
            <img src="/Images/Delight_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 5">
             <div class="image-text5">
                <p class="jersey-name mb-0">Delight</p>
                <p class="jersey-price">SUPP</p>
            </div>
        </div>
        <div class="image-div">
            <img src="/Images/score_site_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 6">
             <div class="image-text6">
                <p class="jersey-name mb-0">Score</p>
                <p class="jersey-price">HEAD COUCH</p>
            </div>
        </div>
        <div class="image-div">
            <img src="/Images/mafa_site_500x.webp" style="height: 100%;
            width: 100%; " alt="Imagen 7">
             <div class="image-text7">
                <p class="jersey-name mb-0">Mafa</p>
                <p class="jersey-price">COUCH</p>
            </div>
        </div>
        <div class="image-div">
            <img src="/Images/museong_site_500x.webp" style="height: 100%;
            width: 100%; "  alt="Imagen 8">
             <div class="image-text8">
                <p class="jersey-name mb-0">Museong</p>
                <p class="jersey-price">COUCH</p>
            </div>
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