<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Latest updates and statistic charts">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/style.css')}}" >
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/contato.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/cadastro.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/sobre.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/produto.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/pageProdutos.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}" >
    {{-- <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/styleTeste.css')}}" > --}}
    <title>MeSustenta</title>
</head>
<body>
<header>
        <section id="containerNav" class="nav d-flex col-lg-12 col-md-12 col-sm-12">
            <nav id="navTopo" class="row">
                <div class="col-3">
                    <a href="/principal"><img src="/img/logoMeSustenta.png" alt="Logo MeSustenta"></a>
                </div>
                <div id="containerSearch" class="container-fluid justify-content-around col-5">
                    <form action="" method="GET">
                        <input type="search" name="buscah" size="24" placeholder="  O que você está procurando">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="row d-flex justify-content-center col-3">
                    @guest
                        <div id="divRightLineTwo" class="col-3">
                                @include('auth.login')
                        </div>
                        <div id="cadastrar" class="d-flex align-items-center col-4">
                            <a id="addLogin" href="/cadastro" style="font-size:0.6em;color:#000505">
                                <i class="fa fa-thumbs-up" style="font-size:1.2em;color:#000505"></i>
                                Cadastre-se
                            </a>
                        </div>
                    @endguest

                    @auth
                    <div id="containerLogado">
                        <p id="primNome">
                            <a class="btn btn-primary btn-outline-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                               Olá, {{ auth()->user()->prim_nome}}
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div id=menuDeslogar class="card card-body">
                                <p id="editarCad">
                                    <a href="/editarCadastro/{{auth()->user()->id}}">
                                        <button id="btnEditarCd" type="button" class="btn btn-outline-info col-12" style="font-size:0.6em;color:#000505">
                                            <i class="fa fa-pencil-square-o" style="font-size:1.2em;color:#000505"></i>Editar Cadastro
                                        </button>
                                    </a>
                                </p>
                                <a href="/logout" ><button id="buttonLogout" type="button" class="btn btn-outline-info col-12" style="font-size:0.6em;color:#000505">
                                    <i class="fa fa-user-times" style="font-size:1.2em;color:#000505"></i>Logout!</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endauth

                    <div class="d-flex align-items-center">
                        <a href="/carrinho/exibir"><i class="fa fa-cart-plus fafaCar"></i></a>
                    </div>
                </div>
            </nav>
            <nav id="navBase" class="container-fluid">
                <!-- Menu Hamburguer Início-->
                <div id="toggle" href="#">
                    <span></span>
                </div>
                <div id="menuResponsivo">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li class="itemMenu"><a href="#">Lojas</a>
                            <ul class="subItemMenu">
                                <li><a href="#">BIOZ</a></li>
                                <li><a href="#">RAIZS</a></li>
                                <li><a href="#">VIVA AMAZON</a></li>
                            </ul>
                        </li>
                        <li class="itemMenu"><a href="#">Departamentos</a>
                            <ul class="subItemMenu">
                                <li><a href="pageDepartamentos.html">Alimentos</a>
                                <li><a href="#">Beleza</a></li>
                                <li><a href="#">Casa</a></li>
                                <li><a href="#">Moda</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                    <!-- Menu Hamburguer Fim-->
                <div id="menuBase" class="container-fluid">
                    <!--  Comeco menu de Produtor-->
                    {{-- <li id="listaLojas" class="navbar-item dropdown">

                        <a class="nav-link dropdown-toggle botao-busca tituloMenu" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">Lojas</a>
                        <div class="dropdown-menu subMenu">
                            <a class="dropdown-item subTitulo" href="#">BIOZ</a>
                            <a class="dropdown-item subTitulo" href="AlimentosPage.html">RAIZS</a>
                            <a class="dropdown-item subTitulo" href="#">VIVA AMAZON</a>
                        </div>
                    </li> --}}
                    <!--    Final menu de Produtor-->
                    <!--   Comeco menu de Departamentos -->
                    <li id="listaDepartamentos" class="navbar-item dropdown">
                        <a class="nav-link dropdown-toggle botao-busca tituloMenu" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu subMenu">
                            <a class="dropdown-item subTitulo" href="/categoria/1">Alimentos</a>
                            <a class="dropdown-item subTitulo" href="/categoria/2">Beleza</a>
                            <a class="dropdown-item subTitulo" href="/categoria/3">Casa, Mesa e Banho</a>

                        </div>
                    </li>
                    <!--   Final menu de Departamentos -->
                    <li><a class="tituloMenu" href="/categoria/1">Alimentos</a></li>
                    <li><a class="tituloMenu" href="/categoria/2">Beleza</a></li>
                    <li><a class="tituloMenu" href="/categoria/3">Casa, Mesa e Banho</a></li>
                </div>
            </nav>
        </section>
    </header>

    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/banner2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3></h3>
                        <p></p>
                        <!-- <a href="https://br.freepik.com/fotos-vetores-gratis/fundo">Fundo foto criado por freepik - br.freepik.com</a> -->
                        <!-- <a href="https://br.freepik.com/fotos-vetores-gratis/fundo">Fundo foto criado por freepik - br.freepik.com</a> -->
                        <!-- <a href="https://br.freepik.com/fotos-vetores-gratis/bandeira">Bandeira vetor criado por vectorpouch - br.freepik.com</a> -->
                        <!-- <a href="https://br.freepik.com/fotos-vetores-gratis/papel">Papel foto criado por freepik - br.freepik.com</a> -->
                        <!-- <a href="https://br.freepik.com/fotos-vetores-gratis/fundo">Fundo foto criado por freepik - br.freepik.com</a> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/banner3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/honest3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <main class="container">
         @yield('container')

    </main>
 <!--FOOTER InÍCIO-->
 <footer class="page-footer font-small blue pt-4 ftr">

<section >
    <div class="container-fluid text-center text-md-left">
    <div class="row section-footer">
        <div class="col-md-6 col-lg-3 item-f">
            <h5 class="text">MeSustenta</h5>
            <p>Por uma vida mais sustentavél e natural.</p>

            <label> Copyright © 2019 | MeSustenta </label>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-3 mb-md-0 mb-3 col-lg-3 ">
            <h5 class="text-uppercase">Links</h5>
            <ul class="list-unstyled item-f">
                <li>
                <a href="/sobre">Nosso Objetivo</a>
                </li>
                <li>
                <a href="/sobre">Quem somos</a>
                </li>
                <li>
                <a href="/contato">Contato</a>
                </li>

            </ul>
        </div>

        <div class="col-md-3 mb-md-0 mb-3 col-lg-3  ">
            <h5 class="text-uppercase">Links</h5>
            <ul class="list-unstyled item-f">
                <li>
                <a href="/principal">Home</a>
                </li>
                <li>
                <a href="/categoria">Categorias</a>
                </li>
                <li>
                <a href="#!">Termos de Uso</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-3 imagem-ftr">
                <img src="/img/logoMeSustenta.png" alt="Logo" class="imagemlogo">
        </div>
    </div>
    </div>

</section>



<!-- Copyright -->

</footer>
<!-- Footer -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>

</html>
