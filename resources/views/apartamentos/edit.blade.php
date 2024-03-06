@extends('layouts.categorias_anuncios')

@section('title', 'Cadastro de Apartamentos')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-10"><a href="{{ route('dashboards-index') }}">Painel inicial</a></div>
        <div class="col-2">Anuncios</div>
    </div>
    <div class="row my-4">
        <div class="col-6">
            <img src="{{ $apartamentos->foto }}" alt="">
            <h5>{{ $apartamentos->titulo }}</h5>
            <p>{{ $apartamentos->descricao }}</p>
            <hr class="my-2">
            <div class="localizacao">
                <span>{{ $apartamentos->localizacao }}</span>
            </div>
        </div>
        <div class="col-6">
            <h3>R$ {{ $apartamentos->preco }},00</h3>
            <button class="btn btn-secondary btn-sm">{{ $apartamentos->venda_aluga }}</button>
            <hr>

            <span class="fs-2">{{ $apartamentos->contato }}</span><br/>
            <button class="btn btn-info">Chat</button>
            <p class="mt-2">Ao ver número ou enviar mensagem, seus dados poderão ser compartilhados com o anunciante.</p>
            <a href="">Saiba mais</a>
        </div>
    </div>
@endsection