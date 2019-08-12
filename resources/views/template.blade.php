<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Latest updates and statistic charts">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/style.css')}}" >
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/contato.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/cadastro.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/sobre.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/produto.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/pageProdutos.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/styleTeste.css')}}" > --}}
    <title>MeSustenta</title>
</head>

<body>
    <header>
        <section id="containerNav" class="nav d-flex col-lg-12 col-md-12 col-sm-12">
            <nav id="menuTopoResponsivo" class="col-md-12 col-sm-12">
                <div id="logoResponsivo">
                    <a href="/principal"><img src="/img/logoMeSustenta.png" alt="Logo MeSustenta"></a>
                </div>
                <div id="buscaResponsivo"class="col-md-12 col-sm-12">
                    <form action="/busca" method="POSt" role="search" class="col-md-12 col-sm-12">
                        @csrf
                        <input class="buscar col-md-8 col-sm-8" type="search" name="search" size="30" placeholder="  O que você está procurando">
                    </form>
                </div>
            </nav>
            <nav id="navTopo" class="d-flex justify-content-around align-items-center col-lg-12">
                <div class="col-lg-3">
                    <a href="/principal"><img src="/img/logoMeSustenta.png" alt="Logo MeSustenta"></a>
                </div>

                <div id="#containerSearch" class="col-lg-3 col-md-12 col-sm-12">
                    <form id="formBusca"action="/busca" method="POSt" role="search" >
                        @csrf
                        <input class="buscar" type="search" name="search" size="24" placeholder="  O que você está procurando">
                        <button type="submit" class="btn btn-default"style="background:none">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>

                <div class="row justify-content-between align-items-center">
                    @guest
                        <div id="divRightLineTwo" class="col-lg-3">
                                {{-- @include('auth.login') --}}
                                <div id="login" class="col-lg-3">
                                        <a href="/login" style="font-size:0.8em;color:#000505">
                                            Login
                                        </a>
                                    </div>
                        </div>
                        <div class="d-flex align-items-center col-lg-3">
                            <a id="fafaCar" href="/carrinho/exibir"><img src="/img/cart.png" alt="imagem carrinho"></a>
                        </div>
                    </div>    
                    <div id="cadastrar">
                        <a id="addLogin" href="/cadastro" style="font-size:0.8em;color:#000505">
                            Cadastre-se
                        </a>
                    </div>           
                    @endguest                 
                @auth
                <div id="containerLogado" class="d-flex align-items-center justify-content-around">
                    <div id="primNome">
                        <a id="nomeUser" data-toggle="collapse" href="#menu-edit-admin" role="button" aria-expanded="false" aria-controls="menu-edit-admin">
                            Olá, {{ Auth::user()->prim_nome}}
                        </a>
                        <div class="collapse" id="menu-edit-admin">
                            <div id=menuDeslogar class="card card-body">
                                <p id="editarCad">
                                    <a href="/editarCadastro/{{Auth::user()->id}}">
                                        <button id="btnEditarCd" type="button" class="btn btn-outline-info"style="font-size:0.8em;color:#000505">
                                            Editar Cadastro
                                        </button>
                                    </a>
                                </p>
                                <a href="/logout">
                                    <button id="buttonLogout" type="button"
                                        class="btn btn-outline-info col-12" style="font-size:0.8em;color:#000505">
                                        Logout!
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>  
                    <div class="d-flex align-items-center">
                        <a id="fafaCarLogado" href="/carrinho/exibir"><img src="/img/cart.png" alt="imagem carrinho"></a>
                    </div>
                </div>
                </div>
                @if(Auth::user()->nivel_user ==0)
                    <a id="aEditarAdmin" href="/index">
                        <button id="btnEditarAdmin" type="button" class="btn btn-outline-info" style="font-size:0.8em;color:#000505">
                            Admin
                        </button>
                    </a>
                @endif 
                @endauth       
            </nav>
            <!-- Menu Haburguer Início-->
                <input type="checkbox" id="menuResponsivo" name="menuResponsivo">
                <label for="menuResponsivo">
                    <img id="hamburguer" src="/img/menu.png" alt="menu hamburguer">
                </label>
                <nav id="navResponsivo">
                    <div id="containerHamburguer">
                        <ul id="ulResponsiva">
                            <li><a class="itemMenu" href="/principal">Home</a></li>
                            <li><a class="itemMenu" href="/categoria">Categorias</a>
                                <ul class="subItemMenu">
                                    <a class="dropdown-item subTitulo" href="/categoria/1">Alimentos</a>
                                    <a class="dropdown-item subTitulo" href="/categoria/2">Beleza</a>
                                    <a class="dropdown-item subTitulo" href="/categoria/3">Casa</a>
                                </ul>
                            </li>
                            <li><a class="itemMenu" href="/sobre">Sobre</a></li>
                            <li><a class="itemMenu" href='/contato'>Contato</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
                <!-- Menu Hamburguer Fim-->
            <nav id="navBase" class="container-fluid">
                <div id="menuBase" class="container-fluid">
                     <!--   Comeco menu de Departamentos -->
                    <li id="listaDepartamentos" class="navbar-item dropdown">
                        <a id="menuCategoria" class="nav-link dropdown-toggle botao-busca tituloMenu"
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">Categorias</a>
                        <div id="subMenu" class="dropdown-menu subMenu">
                            <a class="dropdown-item subTitulo" href="/categoria/1">Alimentos</a>
                            <a class="dropdown-item subTitulo" href="/categoria/2">Beleza</a>
                            <a class="dropdown-item subTitulo" href="/categoria/3">Casa</a>
                        </div>
                    </li>
                    <!--   Final menu de Departamentos -->
                    <li><a class="tituloMenu" href="/categoria/1">Alimentos</a></li>
                    <li><a class="tituloMenu" href="/categoria/2">Beleza</a></li>
                    <li><a class="tituloMenu" href="/categoria/3">Casa</a></li>
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
                        <img src="/img/banner-principal-mesustenta1.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3></h3>
                            <p></p>
                        </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/banner2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3></h3>
                        <p></p>
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
            <p>Por uma vida mais sustentavel e natural.</p>

            <label> Copyright © 2019 | MeSustenta </label>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-3 mb-md-0 mb-3 col-lg-3 ">
            <h5 class="text-uppercase nomes text-center">Links</h5>
            <ul class="list-unstyled item-f">
                <li>
                <a class="ftr-nomes" href="/sobre">Nosso Objetivo</a>
                </li>
                <li>
                <a class="ftr-nomes" href="/sobre">Quem somos</a>
                </li>
                <li>
                <a class="ftr-nomes" href="/contato">Contato</a>
                </li>
                        </ul>
                    </div>

        <div class="col-md-3 mb-md-0 mb-3 col-lg-3  ">
            <h5 class="text-uppercase nomes text-center">Links</h5>
            <ul class="list-unstyled item-f">
                <li>
                <a class="ftr-nomes" href="/principal">Termos de Uso</a>
                </li>
                <li>
                <a class="ftr-nomes" href="/categoria">Categorias</a>
                </li>
                <li>
                <a class="ftr-nomes" href="#!">Home</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-3 imagem-ftr">
                <img class="testando" src="/img/logoMeSustenta.png" alt="Logo" class="imagemlogo">
        </div>
    </div>
    </div>
        </section>

        <!-- Copyright -->

    </footer>
    <!-- Footer -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>

</html>
