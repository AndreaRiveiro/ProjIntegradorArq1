@extends('template')

@section('container')

<h1 class="mecanismo-busca">Resultado da Sua Busca</h1>
<ul class="row">


@forelse ($mecanismo as $busca)

    <div class="cardbuscas" style="width: 18rem;">
        <img src="{{url("$busca->imagens")}}" class="card-img-top" alt="...">
        <div class="card-body card-busca">
            <h5 class="card-title">{{$busca->nome_produto}}</h5>
            <div class="row busca-filtro-bt">
                <button class="btn btn-suces prod-categoria m-1"><a
                href="/produto/{{$busca->idProduto}}">+Detalhes</a></button>
                <button type="submit" class="btn btn-success busca-pag m-1"><a href="/carrinho/adicionar/{{$busca->idProduto}}">Adicionar ao Carinho</a></button>
            </div>
        </div>
    </div>
@empty
        <h5 class="font-italic">Não foi encontrado produtos na busca! </h5>
@endforelse
</ul>


@endsection
