@extends('template')

@section('container')
<h1 class="prodGerais">Produtos Gerais</h1>
<ul class="row">

@foreach ($todosProdutos as $produto)
    <div class="card-prodGerais" style="width: 18rem;">
    <img src="{{url("$produto->imagens")}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$produto->nome_produto}} <a href="/produto/editar/{{$produto->idProduto}}">Editar</a></h5>
        <p class="card-text">{{$produto->descricao_pro}} <a href="/produto/editar/{{$produto->descricao}}"></a></p>
        <button class="btn btn-info right"><a href="/carrinho/exibir">Comprar</a></button>
    </div>
    <!-- <ul class="list-group list-group-flush">
        <li class="list-group-item"></li>
        <li class="list-group-item"></li>
        <li class="list-group-item"></li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link"></a>
        <a href="#" class="card-link"></a>
    </div> -->
    </div>





@endforeach
</ul>



@endsection
