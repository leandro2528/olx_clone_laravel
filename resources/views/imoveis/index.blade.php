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
        @if(count($apartamentos))
            <div class="row">
                @foreach($apartamentos as $apartamento)
                    <div class="col-3">
                        <div class="card-box">
                            <div class="card">
                                <a href="{{ route('apartamentos-edit', ['id'=>$apartamento->id]) }}"><img class="w-100" src="{{ $apartamento->foto }}" alt=""></a>
                                <div>{{ $apartamento->descricao }}</div>
                            </div>      
                        </div>
                    </div>
                @endforeach
            </div>
            @else
            <div class="alert alert-info">Não existem apartamentos cadastrados nesta lista</div>
            @endif
        </div>
    </div>
</div>
@endsection