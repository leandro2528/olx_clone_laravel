<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') OLX - O Maior Site de Compras e Vendas do Brasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">OLX - Clone</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarScroll">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                            </form>
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                                <li class="nav-item d-flex">
                                    <a class="nav-link mx-2" href="#">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-duffle" viewBox="0 0 16 16">
                                                <path d="M8 5.75c1.388 0 2.673.193 3.609.385a18 18 0 0 1 1.43.354l.112.034.002.001h.001a.5.5 0 0 1-.308.952l-.004-.002-.018-.005a17 17 0 0 0-1.417-.354A17.3 17.3 0 0 0 8 6.75a17.3 17.3 0 0 0-3.408.365 17 17 0 0 0-1.416.354l-.018.005-.003.001a.5.5 0 1 1-.308-.95A17.3 17.3 0 0 1 8 5.75"/>
                                                <path d="M5.229 2.722c-.126.461-.19.945-.222 1.375-1.401.194-2.65.531-3.525 1.012C-.644 6.278.036 11.204.393 13.127a.954.954 0 0 0 .95.772h13.314a.954.954 0 0 0 .95-.772c.357-1.923 1.037-6.85-1.09-8.018-.873-.48-2.123-.818-3.524-1.012a7.4 7.4 0 0 0-.222-1.375c-.162-.593-.445-1.228-.971-1.622-1.115-.836-2.485-.836-3.6 0-.526.394-.81 1.03-.971 1.622M9.2 1.9c.26.195.466.57.606 1.085.088.322.142.667.173.998a23.3 23.3 0 0 0-3.958 0 6 6 0 0 1 .173-.998c.14-.515.346-.89.606-1.085.76-.57 1.64-.57 2.4 0M8 4.9c2.475 0 4.793.402 6.036 1.085.238.13.472.406.655.93.183.522.28 1.195.303 1.952.047 1.486-.189 3.088-.362 4.032H1.368c-.173-.944-.409-2.545-.362-4.032.024-.757.12-1.43.303-1.952.183-.524.417-.8.655-.93C3.207 5.302 5.525 4.9 8 4.9"/>
                                            </svg>
                                        </span>
                                        <span>Plano Profissional</span>
                                    </a>
                                </li>
                                <li class="nav-item d-flex">
                                    <a class="nav-link me-2" href="#">                                     
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-grid-3x3-gap" viewBox="0 0 16 16">
                                                <path d="M4 2v2H2V2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1m0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1M9 2v2H7V2zm5 0v2h-2V2zM4 7v2H2V7zm5 0v2H7V7zm5 0h-2v2h2zM4 12v2H2v-2zm5 0v2H7v-2zm5 0v2h-2v-2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1z"/>
                                            </svg>
                                        </span>
                                        <span>Meus Anúncios</span>
                                    </a>
                                <li class="nav-item d-flex">
                                    <a class="nav-link me-2" href="#">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
                                            </svg>
                                        </span>
                                        <span>Chat</span>
                                    </a>
                                </li>
                                <li class="nav-item d-flex">
                                    <a class="nav-link me-2" href="#">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                                            </svg>
                                        </span>
                                        <span>Notificações</span>
                                    </a>
                                <li>
                                    <a class="btn btn-primary btn-sm" href="#">
                                        Anunciar
                                    </a>
                                </li>

                            </ul>
                           
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>
    <hr>
    @yield('content')

    <footer>
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-2">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="">Celulares e Telefonia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Carros Usados e Seminovos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Motos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Computadores e Acessórios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Casas</a>
                        </li>

                    </ul>
                </div>
                
                <div class="col-2">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="">Móvies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Eletroméstico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Videogames</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Áudios, TV, Vídeo e Fotografia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Cachorros e Acessórios</a>
                        </li>

                    </ul>
                </div>

                <div class="col-2">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="">Apartamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Peças e Auto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Vadas de Emprego</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Materiais de Construção e Jardim</a>
                        </li>

                    </ul>
                </div>

                <div class="col-2">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="">Artigos Infantis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Terrenos e Sitios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Roupas e Calçados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Espoertes e Ginásticas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Beleza e Saúde</a>
                        </li>

                    </ul>
                </div>

                <div class="col-2">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="">Bijouterias, Relógios e Acessórios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Ultilidades Domésticas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Instrumentos Musicais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Peças de Moto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Objetos de Decoração</a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>