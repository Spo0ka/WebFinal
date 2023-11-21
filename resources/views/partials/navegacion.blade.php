<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container d-flex justify-content-start bg-white">
        <a class="navbar-brand d-flex align-items-center" href="{{route('InicioIndex')}}">
            <img src="/Images/GG_Logo.webp" alt="Gen.G Logo" style="max-height: 70px; max-width: 100%;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNav" class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('TeamsIndex')}}">Teams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('jerseys.index')}}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('AboutIndex')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('IndexChatbot') }}">ChatBot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('preguntas.index') }}">Gestionar Preguntas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('playeras.index') }}">Añadir Jersey</a>
                </li>
                
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <img src="/Images/carrito-de-compras.png" alt="carrito" class="icon-image">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <img src="/Images/busqueda.png" alt="busqueda" class="icon-image">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <img src="/Images/usuario-de-perfil.png" alt="usuario-de-perfil" class="icon-image">
                    </a>
                </li>
            </ul>
        </div>
        
        
    </div>
</nav>
