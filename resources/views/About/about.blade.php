@extends('layouts.app')

@section('container')
<link rel="stylesheet" href="{{ asset('css//styleAbout.css') }}">
<div class="container-fluid welcome-section p-0">
    <img src="/Images/fondo about geng.png" alt="Imagen de bienvenida" class="img-fluid">
</div>



<div class="container-fluid video-section p-0">
        <iframe width="100%" height="100%  " src="https://www.youtube.com/embed/PAIVRR4Ss0U?si=aPesYGkKBoWGb_C5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="container about-section">
        <h4 style="text-align: center;">About</h4>
        <p>United under #TigerNation, Gen.G’s core mission is to help fans and athletes use the power of gaming and esports to get ahead in and beyond the competition. With an emphasis on education, DEI initiatives, and innovative partnerships, Gen.G is a commercial and thought leader, building a global, inclusive and cross-cultural future for gaming. Its unique portfolio of teams includes the Seoul Dynasty (Overwatch League), League of Legends Champions Korea (LCK), the Gen.G & Gen.G Black VALORANT teams, the PUBG Gen.G team, and the NBA2K’s Gen.G Tigers (the first non-NBA owned team in the NBA 2K League). Gen.G has also been a major proponent in seamlessly bringing in non-endemic brand partners to the world of gaming and esports, including 1Password, Burberry, Crocs, King’s Hawaiian, McDonald’s, Mobil1, Procter & Gamble, Toyota, and more. Gen.G also operates the Elite Esports Academy, the world’s first fully-integrated academic esports program in Korea. Gen.G’s teams, content creators and corporate staff work out of their offices in Los Angeles, Seoul and Shanghai. For more information, visit GenG.gg or follow on Twitter @GenG.</p>
    </div>

    <div class="container-fluid welcome-section p-0">
        <img src="/Images/frase geng.jpg" style="max-width: 100%; width: 100%;" alt="Imagen de bienvenida">
    </div>
</body>




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