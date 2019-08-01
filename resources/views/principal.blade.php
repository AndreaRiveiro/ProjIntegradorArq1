@extends('template')

@section('container')
<div class="categorias cards">
 <h1  class="text-center mb-3">Categorias</h1>
<div class="card-deck container-fluid">
        <div class="card">
          <img src="/img/cestapequena.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
        <div class="card">
          <img src="/img/beleza1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="/img/detergentes1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
</div>

<div class="card-carrousel produtos">
<div class="container-fluid">
        <h1 class="text-center mb-3">Produtos</h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner row  w-100  mx-auto">
            <div class="carousel-item col-md-4 active">
              <div class="card">
                <img class="card-img-top img-fluid" src="/img/cebola.jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 1</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="/img/cebolaroxa.jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 2</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="/img/cebolinha.jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 3</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="/img/cenoura.jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 4</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="/img/Cesta_Mercearia.jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 5</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 6</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 7</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
</div>
</div>

@endsection
