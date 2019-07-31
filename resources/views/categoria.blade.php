@extends('template')

@section('container')
<section>
<div class="container-fluid">
    <div class="row">
        <div col-6>
            <h2>Categorias</h2>
                <ul>
                   @foreach ($categorias as $categoria)
                <li><a href="/categoria/{{$categoria->idCategoria}}">{{$categoria->tipo_categoria}}</a><li>
                   @endforeach
                   <li><a href="/categoria">Todos os produtos</a></li>
                </ul>
        </div>
        <div col-6>
            <h3>Nomes</h3>

            <div class="card-deck">
                @foreach ($produtos as $produto)
                <div class="card">
                        <img src="/img/cestapequena.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{$produto->nome_produto}}</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
 </div>





@endsection
