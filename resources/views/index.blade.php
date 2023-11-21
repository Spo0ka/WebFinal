@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('container' )
<section class="container my-2 ">
    <div class="row">
        <div class="col-md-7 mb-2">
           
            <img src="/Images/gg_puma_gif.webp" alt="Imagen 1" style="width: 100%; height: 100%;">
        </div>
        
        <div class="col-md-4 mb-2">
            
            <img src="./Images/leon de gen g.png" alt="Imagen 2" class="img-fluid" style="width: 100%; height: 100%">
        </div>
        
    
        <div class=" col-md-4 mb-2">
            <img src="/Images/SHOE collection.webp" alt="Imagen 3" class="img-fluid" style="width: 100%; height: 100%">
        </div>
        <div class="col-md-7"> 
            <img src="/Images/anuncio.webp" alt="Imagen 4" style="width: 100%; height: 100%;">
        </div>
    </div>
        
</section>






    <!-- Carrusel de patrocinadores -->
    <div class="slider align-middle border-top align-items-center mt-2 mb-0 my-2 mx-0 bg-white">
        <div class="slide-track bg-white">
            <div class="slide">
                <img src="/Images/sidiz.webp" alt="">
            </div>
            <div class="slide">
                <img src="/Images/Hyundai-Logo.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/LG-Logotipo-2014-Presente-650x366.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/logo-Puma-500x249.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/mcdonalds-logo.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/monster logo.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/mobil-1-vector-logo.png" alt="">
            </div>

            <div class="slide">
                <img src="/Images/PG-Logo-500x283.png" alt="">
            </div>

            <div class="slide">
                <img src="/Images/mobil-1-vector-logo.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/sidiz.webp" alt="">
            </div>
            <div class="slide">
                <img src="/Images/LG-Logotipo-2014-Presente-650x366.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/logo-Puma-500x249.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/mcdonalds-logo.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/monster logo.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/mobil-1-vector-logo.png" alt="">
            </div>

            <div class="slide">
                <img src="/Images/PG-Logo-500x283.png" alt="">
            </div>

            <div class="slide">
                <img src="/Images/sidiz.webp" alt="">
            </div>

            <div class="slide">
                <img src="/Images/Hyundai-Logo.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/LG-Logotipo-2014-Presente-650x366.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/logo-Puma-500x249.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/mcdonalds-logo.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/monster logo.png" alt="">
            </div>
            <div class="slide">
                <img src="/Images/mobil-1-vector-logo.png" alt="">
            </div>

            <div class="slide">
                <img src="/Images/PG-Logo-500x283.png" alt="">
            </div>
        </div>
    </div>

    <div class="container border-top bg-white" style="max-width: 100%;">
        <div class="row">
            <div class="col-md-4 mt-2">
                <h2 class="text-start text-md-end" style="color: #A58721;">JOIN THE CLUB</h2>
            </div>
            <div class="col-md-8 mt-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Correo">
                </div>
                <div style="margin-left: 10%; margin-right: 10%;">
                    <button class="btn btn-warning text-white mt-2" style="background-color: #A58721; border-color: #A58721; width: 60vw; max-width: 400px;">Subscribe</button>
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