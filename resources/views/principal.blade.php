@extends('template')

@section('container')



<section class="categorias">
    <div class="categoria cards">
        <h1 class="text-center mb-3">Categorias</h1>


        <div class="card-deck container-fluid">
            @foreach($categorias as $categoria)
            <div class="card categ">
            <img src="{{$categoria->imagensCategoria}}" class="card-img img-tamanho" alt="...">
                <div class="card-body">
                    <button type="button" class="btn btn-sucess categoria-card1"><a
                            href="/categoria/{{$categoria->idCategoria}}">{{$categoria->tipo_categoria}}</a>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>




<section class="produtos row mt-5 mb-5">
    <div class="col-md-12 text-center cardprodcateg">
        <h2 class="card-categoria-principal">Veja alguns produtos</h2>
    </div>
    @foreach ($produtos as $produto)
    <div class="col-md-4 crdmw">
        <div class="card categ-prod">
            <img class="card-img-top img-fluid img-modificada" src="{{$produto->imagens}}" alt="Card image cap" />
            <div class="card-body">
                <h4 class="card-title card2">{{$produto->nome_produto}}</h4>
                <button type="button" class="btn btn-sucess categoria-card2"><a
                    href="/produto/{{$produto->idProduto}}">Ver mais</a>
               </button>
             <button type="button" class="btn btn-sucess categoria-comprar"><a href="/carrinho/adicionar/{{$produto->idProduto}}">Comprar</a></button>
            </div>
        </div>
    </div>
    @endforeach


</section>
<script>
let login = {{request()->login}}
console.log(login)
if(login){
    var modal = document.getElementById('id01');
    console.log(modal)
    // When the user clicks anywhere outside of the modal, close it

            modal.style.display = "block";
}

</script>



@endsection
