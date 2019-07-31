@extends('template')

@section('container')

<section class="container sobre-conteudo col-12 col-sm-12 col-md-11 col-lg-11 col-xl-10">
        <div class="sobre-imagem">
        </div>

        <div class="sobre-controle row">
            <img src="img~/corn_rs.png" alt="">
            <article class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 textovideo">
                    <h2>Nossa História</h2>

                    <p class="font">O site nasceu do desejo de 3 desenvolvedoras de facilitar o acesso a produtos e marcas
                        sustentáveis, através da concentração destas em um único local. Notamos que um dos grandes
                        problemas de aderir a este movimento mais consciente é a dificuldade de encontrar produtos
                        sustentáveis, devido à falta de informação em relação a locais onde comprar, que em sua maioria
                        são de pequeno porte e se encontram em nichos específicos. Por este motivo, idealizamos um site
                        que reúne diversas marcas, sejam elas pequenas ou grandes, com intuito de criar um mundo mais
                        sustentável.</p>
                </div>
            </article>
        </div>
        <div class="container objetivo">
        <video controls poster="" class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10 videomd">
                <source src="{{asset('video/3Rs.mp4') }}" type="video/mp4">
            </video>
            <div class="row">
                <div class="card mb-3">
                <img src="img/reduzir.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                <div class="card mb-3">
                <img src="img/reutilizar.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                <div class="card mb-3">
                <img src="img/reciclar.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        
        
        </div>


    </section>




@endsection
