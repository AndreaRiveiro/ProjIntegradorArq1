@extends('template')

@section('container')
<h1 class="prodGerais">Produtos Gerais</h1>
<ul class="row">

@foreach ($todosProdutos as $produto)
    <div class="card-prodGerais" style="width: 18rem;">
        <img src="{{url("$produto->imagens")}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$produto->nome_produto}}</h5>
            <button class="btn btn-success"><a href="/produto/editar/{{$produto->idProduto}}">Editar</a></button>
        </div>
    </div>





@endforeach
</ul>



@endsection
