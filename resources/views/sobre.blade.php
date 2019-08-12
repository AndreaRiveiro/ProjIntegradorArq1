@extends('template')

@section('container')

<section class="container-fluid sobre">
        <div class="row col-lg-12 col-md-12 col-sm-12 sobre-controle sobre-conteudo">
                 <h2 class="titulo">Nossa História!</h2>
                 <div class="texto">
                    <p class="font">O site nasceu do desejo de 2 desenvolvedoras que tinham como intuito facilitar o acesso a produtos e marcas
                     sustentáveis, através da concentração destas em um único local. Notamos que um dos grandes problemas de aderir a este movimento mais consciente é a dificuldade de encontrar produtos sustentáveis, devido à falta de informação em relação a locais onde comprar, que em sua maioria são de pequeno porte e se encontram em nichos específicos. Por este motivo, idealizamos um site que reúne diversas marcas, sejam elas pequenas ou grandes, com intuito de criar um mundo mais sustentável.</p>
                </div>

        </div>
        <div class="container objetivo col-12 cards-r">
        {{-- <video controls poster="" class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10 videomd"> --}}
                {{-- <source src="{{asset('video/3Rs.mp4') }}" type="video/mp4"> --}}
            {{-- </video> --}}
            <h2 class="titulo">Nosso Objetivo</h2>
            <div class="row cartoes">
                <p class="font">O nosso objetivo é implementar a política dos 3Rs, que é uma medida criada para que as pessoas diminuam a produção de lixo. Trata-se de um incentivo ou uma campanha para influenciar a população a poluir menos o meio ambiente através de um consumo consciente e também por meio de um manejo sustentável dos produtos e materiais utilizados no dia a dia.</p>
                    <div class="card-deck sobre-conteudo">
                            <div class="card">
                              <img src="/img/reduzir.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <p class="card-text tresR">Quando falamos em reduzir, estamos nos referindo ao ato de diminuir o lixo e também a emissão de poluentes através de um consumo mais consciente, poupando também os recursos naturais.</p>
                              </div>
                            </div>
                            <div class="card">
                              <img src="/img/reutilizar.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <p class="card-text tresR">A ação de reutilizar um produto é poder dar uma nova utilidade para algo que, normalmente, seria jogado fora. Assim, evitamos que um lixo seja produzido e que também outro produto seja comprado, reduzindo tanto o descarte quanto o consumo.</p>
                              </div>
                            </div>
                            <div class="card">
                                    <img src="/img/reciclar.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text tresR">Promover uma reciclagem é a transformação de um produto que não pode ser mais utilizado em um novo produto ou matéria-prima. Lembre-se de que reciclar é diferente de reutilizar, pois na reutilização o material reaproveitado continua sendo o mesmo, embora possa ser usado para fins diferentes.</p>
                            </div>
                            </div>
                     </div>

            </div>


        </div>


    </section>




@endsection
