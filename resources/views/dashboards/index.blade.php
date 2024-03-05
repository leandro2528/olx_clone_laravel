@extends('layouts.app')

@section('title', 'O Maior Site de Compra e Venda do Brasil')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="height: 400px;">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/img-01.webp" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                           
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000"style="height: 400px;">
                            <img src="images/img-02.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                               
                            </div>
                    </div>
                    <div class="carousel-item" style="height: 400px;">
                            <img src="images/img-03.webp" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                           
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 400px;">
                            <img src="images/img-04.webp" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                           
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col me-3">
            <div class="box-cat w-100">
                <div class="box-icon text-center p-2" style="background-color: #eee; border-radius: 6px;">
                    <img src="icons/icon1.png" class="d-block w-100" alt="...">
                </div>
                <div class="box-title text-center" style="font-size: 12px; color: #555;">Auto e Peças</div>
            </div>
        </div>
        <div class="col">
            <div class="box-cat w-100">
                <div class="box-icon text-center p-2" style="background-color: #eee; border-radius: 6px;">
                    <img src="icons/icon3.png" class="d-block w-100" alt="...">
                </div>
                <div class="box-title text-center" style="font-size: 12px; color: #555;">Imóveis</div>
            </div>
        </div>
        <div class="col mx-3">
            <div class="box-cat w-100">
                <div class="box-icon text-center p-2" style="background-color: #eee; border-radius: 6px;">
                    <img src="icons/icon4.png" class="d-block w-100" alt="...">
                </div>
                <div class="box-title text-center" style="font-size: 12px; color: #555;">Celulares e Telefonia</div>
            </div>
        </div>
        <div class="col">
            <div class="box-cat w-100">
                <div class="box-icon text-center p-2" style="background-color: #eee; border-radius: 6px;">
                    <img src="icons/icon2.png" class="d-block w-100" alt="...">
                </div>
                <div class="box-title text-center" style="font-size: 12px; color: #555;">Casa e Decoração</div>
            </div>
        </div>
        <div class="col mx-3">
            <div class="box-cat w-100">
                <div class="box-icon text-center p-2" style="background-color: #eee; border-radius: 6px;">
                    <img src="icons/icon6.png" class="d-block w-100" alt="...">
                </div>
                <div class="box-title text-center" style="font-size: 12px; color: #555;">Moda e Beleza</div>
            </div>
        </div>
        <div class="col">
            <div class="box-cat w-100">
                <div class="box-icon text-center p-2" style="background-color: #eee; border-radius: 6px;">
                    <img src="icons/icon5.png" class="d-block w-100" alt="...">
                </div>
                <div class="box-title text-center" style="font-size: 12px; color: #555;">Esportes e Lazer</div>
            </div>
        </div>
        <div class="col mx-3">
            <div class="box-cat w-100">
                <div class="box-icon text-center p-2" style="background-color: #eee; border-radius: 6px;">
                    <img src="icons/icon7.png" class="d-block w-100" alt="..."> 
                </div>
                <div class="box-title text-center" style="font-size: 12px; color: #555;">Música e Hobbies</div>
            </div>
        </div>
        <div class="col">
            <div class="box-cat w-100">
                <div class="box-icon text-center p-2" style="background-color: #eee; border-radius: 6px;">
                    <img src="icons/icon8.png" class="d-block w-100" alt="...">
                </div>
                <div class="box-title text-center" style="font-size: 12px; color: #555;">Artigos Infantis</div>
            </div>
        </div>
        <div class="col mx-3">
            <div class="box-cat w-100">
                <div class="box-icon text-center p-2" style="background-color: #eee; border-radius: 6px;">
                    <img src="icons/icon10.png" class="d-block w-100" alt="...">
                </div>
                <div class="box-title text-center" style="font-size: 12px; color: #555;">Agro e Industria</div>
            </div>
        </div>
        <div class="col">
            <div class="box-cat w-100">
                <div class="box-icon text-center p-2" style="background-color: #eee; border-radius: 6px;">
                    <img src="icons/icon9.png" class="d-block w-100" alt="...">
                </div>
                <div class="box-title text-center" style="font-size: 12px; color: #555;">Serviços</div>
            </div>
        </div>
        <div class="col mx-3">
            <div class="box-cat w-100">
                <div class="box-icon text-center p-2" style="background-color: #eee; border-radius: 6px;">
                    <img src="icons/icon11.png" class="d-block w-100" alt="...">
                </div>
                <div class="box-title text-center" style="font-size: 12px; color: #555;">Vagas de Empregos</div>
            </div>
        </div>
    </div>
</div>
@endsection