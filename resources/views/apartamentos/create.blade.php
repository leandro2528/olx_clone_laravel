@extends('layouts.categorias_anuncios')

@section('title', 'Cadastro de Apartamentos')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-column align-items-center mt-5">
           <div class="voltar_anuncio">
                <a href="{{ route('anuncios-index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#444" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                    </svg>
                </a>
               <span class="fs-5 ms-3">Apartamentos</span>
           </div>
           <h4 class="my-3">Agora, compartilhe algumas <br/> informações sobre seu produto</h4>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-5">
            <form action="{{ route('apartamentos-store') }}" method="POST">
                @csrf
                <div class="form-group my-3">
                    <label for="">Titulo *</label>
                    <input type="text" class="form-control" name="titulo">
                </div>
                <div class="form-group my-3">
                    <label for="">Descricao *</label>
                    <input type="text" class="form-control" name="descricao">
                </div>
                <div class="form-group my-3">
                    <label for="">Tipo de Apartamento *</label>
                    <select class="form-select" name="tipoapartamento_id" id="tipoapartamento_id">
                        <option value="select">-- selecione --</option>
                        @foreach($tipoapartamentos as $tipoapartamento)
                            <option value="{{ $tipoapartamento->id }}">{{ $tipoapartamento->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Venda / Aluga *</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="venda_aluga" id="venda" value="venda">
                        <label class="form-check-label" for="venda">Venda</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="venda_aluga" id="aluga" value="aluga">
                        <label class="form-check-label" for="aluga">Aluga</label>
                    </div>
                </div>
                <div class="form-group my-3">
                    <label for="">Número de quartos *</label>
                    <select class="form-select" name="quantidade_id" id="quantidade_id">
                        <option value="select">-- selecione --</option>
                        @foreach($quantidades as $quantidade)
                            <option value="{{ $quantidade->id }}">{{ $quantidade->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Número de banheiros *</label>
                    <select class="form-select" name="quantidade_id" id="quantidade_id">
                        <option value="select">-- selecione --</option>
                        @foreach($quantidades as $quantidade)
                            <option value="{{ $quantidade->id }}">{{ $quantidade->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Área *</label>
                    <input type="text" class="form-control" name="area">
                </div>
                <div class="form-group my-3">
                    <label for="">Vagas de garagem *</label>
                    <select class="form-select" name="quantidade_id" id="quantidade_id">
                        <option value="select">-- selecione --</option>
                        @foreach($quantidades as $quantidade)
                            <option value="{{ $quantidade->id }}">{{ $quantidade->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Vagas de condominio *</label>
                    <select class="form-select" name="quantidade_id" id="quantidade_id">
                        <option value="select">-- selecione --</option>
                        @foreach($quantidades as $quantidade)
                            <option value="{{ $quantidade->id }}">{{ $quantidade->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">IPTU *</label>
                    <input type="text" class="form-control" name="iptu">
                </div>
                <div class="form-group my-3">
                    <label for="">Detalhes do imóvel *</label>
                    <input type="text" class="form-control" name="detalhes-imovel">
                </div>
                <div class="form-group my-3">
                    <label for="">Detalhes do condominio *</label>
                    <input type="text" class="form-control" name="detalhes-condominio">
                </div>
                <div class="form-group my-3">
                    <label for="">Preço *</label>
                    <input type="text" class="form-control" name="preco">
                </div>
                <div class="form-group my-3">
                    <label for="">Foto *</label>
                    <input type="text" class="form-control" name="foto">
                </div>
                <div class="form-group my-3">
                    <label for="">Localização *</label>
                    <input type="text" class="form-control" name="localizacao">
                </div>
                <div class="form-group my-3">
                    <label for="">Contato *</label>
                    <input type="text" class="form-control" name="contato">
                </div>
                <div class="form-group my-3">
                    <input type="submit" class="btn btn-primary btn-sm" value="Cadastrar Apartamento">
                </div>

            </form>
        </div>
    </div>
</div>
@endsection