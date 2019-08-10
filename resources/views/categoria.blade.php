@extends('template')

@section('container')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 nomescteg mb-5">
                <h2 class="text-center m-5">Categorias</h2>
                <ul class="nav justify-content-center">
                    @foreach ($categorias as $categoria)

                    <li class="nav-item lista-categorias"><a
                            href="/categoria/{{$categoria->idCategoria}}">{{$categoria->tipo_categoria}}</a></li>
                    @endforeach
                    <li class="nav-item lista-categorias"><a id="lista-ultimo" href="/categoria">Todos os produtos</a>
                    </li>
                </ul>
            </div>


            @foreach ($produtos as $produto)

                <div class="card-deck prodr-categoria-vizualizacao col-md-4 mt-5">

                    <div class="card produtos-categoria">
                        <img src="{{url("$produto->imagens")}}" class="card-img-top img-tamanho" alt="...">
                        <div class="card-categoriasgerais card-body">
                            <h5 class="card-title">{{$produto->nome_produto}}</h5>
                            <p class="card-text"></p>
                            <button class="btn btn-suces prod-categoria m-1"><a
                                    href="/produto/{{$produto->idProduto}}">+Detalhes</a></button>
                            <button class="btn btn-success prod-compra m-1"><a
                                    href="/carrinho/adicionar/{{$produto->idProduto}}">Comprar</a></button>
                        </div>
                    </div>



                </div>
            @endforeach
        </div>
    </div>





    @endsection
