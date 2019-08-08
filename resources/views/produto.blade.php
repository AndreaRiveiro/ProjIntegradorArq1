@extends('template')

@section('container')


<div class="container quadro-produto">
    <div class="row quadro">
      <div class=" col-sm-12 col-md-6 col-lg-6 d-flex mx-auto imagens">
        <div class="row">


          <div class="big col-9 col-sm-9 col-md-9 princi">
          <a href=""><img src="{{url("$produto->imagens")}}" alt="3rs" class="img-fluid img3 zoom"></a>
          </div>

        </div>

      </div >
      <div class="col-md-6 descricao">
        <div class="name-info">
        <h2>{{$produto->nome_produto}}</h2>
        </div>
        <div class="preco">
        <span>{{$produto->preco_venda}}</span>
        </div>

        <form class="form-add-carrinho" action="/carrinho/adicionar/{{$produto->idProduto}}" method="post">
        @csrf
        <div class="row">
          <div class="quant">
            <label>Quantidade</label>
            <input type="number" class="quantidade" nome="quantidade_em_estoque">
          </div>

        </div>
        <div class="row">
          <div class="btn2">
          <button type="submit" class="btn btn-primary rounded-pill btnn "><a href="/carrinho/adicionar/{{$produto->idProduto}}">Adicionar ao Carinho</a></button>
          </div>
         </div>
       </form>
        <div class="info">
            <div class="card text-center">
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Especificações</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Link</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">

                <p class="card-text">{{$produto->descricao_prod}}</p>
                </div>
              </div>

        </div>

      </div>

    </div>

  </div>
</div>


<div class="container-imagem mt-5 rodape">


    <div class="row justify-content-center">
    <div class="col-lg-12 prod text-center">
        <h4>Produtos Relacionados</h4>
        </div>
            @foreach ($produtos as $filtro)
                <div class="card imagem col-lg-2 col-sm-12 col-12 imgcard">
                    <img  src="{{url("$filtro->imagens")}}" class="card-img-top zoom" alt="...">
                    <div class="card-body">
                    <p class="card-text">{{$filtro->nome_produto}}</p>
                    </div>
                </div>
            @endforeach

    </div>


    <script src="{{asset('js/produto.js')}}"></script>
@endsection
