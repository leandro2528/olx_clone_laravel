@extends('layouts.app')

@section('title', 'Listagem de Imóveis')

@section('content')
<div class="container-fliud">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active bg-primary">
                        <img style="height: 280px;" src="images/imoveis-banner.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h5>Encontre o seu imóvel ideal</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
               
                <div class="card">
                    <div class="card-titulo"></div>
                    <div class="card-descricao"></div>
                    <div class="card-tipo-apartamento"></div>
                    <div class="card-venda-aluga"></div>
                    <div class="card-quantidade-quartos"></div>
                    <div class="card-quantidade-banheiros"></div>
                    <div class="card-area"></div>
                    <div class="card-condominio"></div>
                    <div class="card-iptu"></div>
                    <div class="card-detalhe-imovel"></div>
                    <div class="card-detalhe-condominio"></div>
                    <div class="card-preco"></div>
                    <div class="card-localizacao"></div>
                    <div class="card-contato"></div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection