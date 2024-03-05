@extends('layouts.categorias_anuncios')

@section('title', 'Inserir Anúncio')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12 mb-3">
            <h2>Olá, o que você quer anunciar?</h2>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-3">
            <a class="text-decoration-none" href="" data-bs-toggle="modal" data-bs-target="#modalImoveis">
                <div class="card" style="background-color: #eee;">
                    <div class="card-icon">
                        <img style="width: 60px;" src="icons/icon2.png" alt="">
                    </div>
                    <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Imóveis</div>
                </div>
            </a>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon1.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Autos e Peças</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon4.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Celulares e Telefonia</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon6.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Moda e Beleza</div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon3.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Moveis</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon13.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Casa, Decoração e Utensílios</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon14.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Informatica</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon22.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Eletro</div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon15.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Animais de EStimação</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon8.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Artigos Infantis</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon5.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Esporte e Lazer</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon7.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Musicas e Hobbies</div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon19.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Game</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon17.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Comércio e Escritório</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon9.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Serviços</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon21.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Materiais de Contrução</div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon20.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Áudio</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon18.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">TVs e Vídeos</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon10.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Agro e Industia</div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon16.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Câmaras e Drones</div>
            </div>
        </div>
    </div>
    <div class="row mt-4 mb-5">
        <div class="col-3">
            <div class="card" style="background-color: #eee;">
                <div class="card-icon">
                    <img style="width: 60px;" src="icons/icon11.png" alt="">
                </div>
                <div class="card-title" style="font-size: 12px; font-weight: 600; padding-left: 14px;">Vagas de Empregos</div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Modal Imóveis-->
<div class="modal fade" id="modalImoveis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Imóveis</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between" href="{{ route('apartamentos-create') }}">
                            <span>Apartamentos</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between" href="">
                            <span>Casas</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between" href="">
                            <span>Aluguel de quartos</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between" href="">
                            <span>Temporadas</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between" href="">
                            <span>Terrenos, Sitios e Fazendas</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between" href="">
                            <span>Comércio e Industria</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                </svg>
                            </span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>