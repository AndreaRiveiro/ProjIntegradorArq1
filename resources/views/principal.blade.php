@extends('template')

@section('container')

<section class="categorias">
    <div class="categorias cards">
        <h1 class="text-center mb-3">Categorias</h1>


        <div class="card-deck container-fluid">
            @foreach($categorias as $categoria)
            <div class="card categ">
                <img src="/img/cestapequena.jpg" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <a
                            href="/categoria/{{$categoria->idCategoria}}">{{$categoria->tipo_categoria}}</a></h5>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>



<section class="produtos row mt-5 mb-5">
    <div class="col-md-12 text-center">
        <h2>Veja alguns produtos</h2>
    </div>
    @foreach ($produtos as $produto)
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top img-fluid" src="{{$produto->imagens}}" alt="Card image cap" />
            <div class="card-body">
                <h4 class="card-title">{{$produto->nome_produto}}</h4>
            </div>
        </div>
    </div>
    @endforeach

</section>


@endsection
