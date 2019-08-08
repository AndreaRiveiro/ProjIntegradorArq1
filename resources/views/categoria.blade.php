@extends('template')

@section('container')
<section>
<div class="container-fluid">
    <div class="row">
        <div class= "col-3 nomescteg">
            <h2>Categorias</h2>
                <ul>
                   @foreach ($categorias as $categoria)
                <li><a href="/categoria/{{$categoria->idCategoria}}">{{$categoria->tipo_categoria}}</a></li>
                   @endforeach
                   <li><a href="/categoria">Todos os produtos</a></li>
                </ul>
        </div>

        <div class="col-9">

            <div class="card-deck prodr-categoria-vizualizacao">
                @foreach ($produtos as $produto)
                <div class="card produtos-categoria">
                <img src="{{url("$produto->imagens")}}" class="card-img-top" alt="...">
                        <div class="card-categoriasgerais">
                        <h5 class="card-title">{{$produto->nome_produto}}</h5>
                        <p class="card-text"></p>
                        <button class="btn btn-sucess prod-categoria"><a href="/produto/{{$produto->idProduto}}">+Detalhes</a></button>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
 </div>





@endsection
