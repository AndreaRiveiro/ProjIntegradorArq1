@extends('template')

@section('container')


<div class="container quadro-produto">
    <div class="row quadro">
      <div class=" col-sm-12 col-md-6 col-lg-6 d-flex mx-auto imagens">
        <div class="row">
          <div class="imdcarrousel small col-3 col-sm-3 col-md-3 caro">
           <img  id="myImg" src="img/casourico.jpg" alt="Imagem 1" class="img-fluid img1 itemModal zoem">
            <a href=""><img src="img/castanhanatura.jpg" alt="imgteste2" class="img-fluid img2 itemModal zoem"></a>
            <a href=""><img src="img/castanhasmcs.jpg" alt="imgteste2" class="img-fluid img2 itemModal zoem"></a>

          </div>
          <div class="big col-9 col-sm-9 col-md-9 princi">
            <a href=""><img src="img/hidratante-castanha.png" alt="3rs" class="img-fluid img3 zoom"></a>
        
          </div>

        </div>

      </div >
      <div class="col-md-6 descricao">
        <div class="name-info">
          <h2>Loção Corporal de Castanha do Pará</h2>
        </div>
        <div class="preco">
          <span>R$ 35,00</span>
        </div>

        <form class="form-add-carrinho" action="/carrinho/adicionar/2" method="post">
        @csrf
        <div class="row">
          <div class="quant">
            <label>Quantidade</label>

            <input type="hidden" class="idProd" nome="idProduto"> 
            <input type="hidden" class="nomeProduto" nome="nome_produto">
            <input type="number" class="quantidade" nome="quantidade_em_estoque">
          </div>         
          
        </div>
        <div class="row">
          <div class="btn2">
          <button type="submit" class="btn btn-primary rounded-pill btnn ">Adicionar ao Carinho</a></button>
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
                      <a class="nav-link" href="https://www.vivaamazon.com.br/product-page/lo%C3%A7%C3%A3o-hidratante-castanha-220ml">Link</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  
                  <p class="card-text"> Função: Altamente hidratante, previne e trata rachaduras e estrias. Indicado para peles extremamente secas e sensíveis. • Textura: Leitoso. • Cor: Branco. Composição: Aqua (Water), Glyceryl Stearate ,Cetearyl Alcohol,Stearic Acid, Sodium Cocoyl Glucamate, Theobroma Grandiflorum Seed Butter *, Bertholletia Excelsa Seed Oil , Parfum, Sodium Benzoate , Tocopheryl Acetate , Sorbic Acid, Alpha-Isomethyl Ionone, Benzyl Salicylate, Butylphenyl Methylpropional, Cinnamyl Alcohol, Citronellol, Coumarin, Geraniol, Hexyl Cinnamal, Hydroxyisohexyl 3-Cyclohexene Carboxaldelyde, Limonene, Linalool. * Certificado/Certified by Ecocert</p>
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
       
            <div class="card imagem col-lg-2 col-sm-12 col-12 imgcard">
                <img  src="img/sabonete-esfoliante.png" class="card-img-top zoom" alt="...">
                <div class="card-body">
                  <p class="card-text">Esfoliante Facial</p>
                </div>
              </div>
              <div class="card imagem col-lg-2 col-sm-12 col-12 imgcard">
                  <img src="img/creme-corporal-buriti.png"  class="card-img-top zoom" alt="...">
                  <div class="card-body">
                    <p class="card-text">Loção Corporal de Buriti</p>
                  </div>
                </div>
                <div class="card imagem col-lg-2 col-sm-12 col-12 imgcard">
                    <img src="img/locao-hidratante.png"  class="card-img-top zoom" alt="...">
                    <div class="card-body">
                      <p class="card-text textocard">Loção Hidratante de Andiroba</p>
                    </div>
                  </div>
                  <div class="card imagem col-lg-2 col-sm-12 col-12 imgcard">
                      <img src="img/limpezafacial.png" class="card-img-top zoom" alt="...">
                      <div class="card-body">
                        <p class="card-text">Sabonete de Limpeza Facial</p>
                      </div>
                    </div>
        
    </div>


    <script src="{{asset('js/produto.js')}}"></script>
@endsection    