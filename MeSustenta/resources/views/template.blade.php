<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Latest updates and statistic charts">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/style.css')}}" >
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/contato.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/cadastro.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/sobre.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/produto.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/pageProdutos.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}" >
    <title>MeSustenta</title>
</head>
<body>
    <header>
        <section id="containerNav" class="nav d-flex col-lg-12 col-md-12 col-sm-12">
            <nav id="navTopo" class="row">
                <a href="/principal"><img src="img/logoMeSustenta.png" alt="Logo MeSustenta"></a>
                <div id="containerSearch" class="justify-content-around col-4">
                    <form action="" method="GET">
                        <input type="search" name="buscah" size="24" placeholder="  O que você está procurando">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>                
                <div class="row d-flex justify-content-around col-4">
                    @guest
                        <div id="divRightLineTwo" class="col-5">           
                                @include('auth.login') 
                        </div>
                        <div id="cadastrar" class="d-flex align-items-center col-4">     
                            <a id="addLogin" href="/cadastro" style="font-size:0.6em;color:#000505">
                                <i class="fa fa-thumbs-up" style="font-size:1em;color:#000505"></i>
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
                                            <i class="fa fa-pencil-square-o" style="font-size:1em;color:#000505"></i>Editar Cadastro
                                        </button>
                                    </a>
                                </p>
                                <a href="/logout" ><button id="buttonLogout" type="button" class="btn btn-outline-info col-12" style="font-size:0.6em;color:#000505">
                                    <i class="fa fa-user-times" style="font-size:1em;color:#000505"></i>Logout!</button>
                                </a>
                            </div>
                        </div>   
                    </div>          
                    @endauth

                    <div>
                        <a href="/carrinho/exibir"><img src="img/iconeCarP.png" alt=""></a>
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
                    <li>Home</li>
                    <li id="listaLojas" class="navbar-item dropdown">
    
                        <a class="nav-link dropdown-toggle botao-busca tituloMenu" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">Lojas</a>
                        <div class="dropdown-menu subMenu">
                            <a class="dropdown-item subTitulo" href="#">BIOZ</a>
                            <a class="dropdown-item subTitulo" href="AlimentosPage.html">RAIZS</a>
                            <a class="dropdown-item subTitulo" href="#">VIVA AMAZON</a>
                        </div>
                    </li>
                    <!--    Final menu de Produtor-->
                    <!--   Comeco menu de Departamentos -->
                    <li id="listaDepartamentos" class="navbar-item dropdown">
                        <a class="nav-link dropdown-toggle botao-busca tituloMenu" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu subMenu">
                            <a class="dropdown-item subTitulo" href="pageDepartamentos.html">Alimentos</a>
                            <a class="dropdown-item subTitulo" href="#">Beleza</a>
                            <a class="dropdown-item subTitulo" href="#">Casa</a>
                            <a class="dropdown-item subTitulo" href="#">Moda</a>
                        </div>
                    </li>
                    <!--   Final menu de Departamentos -->
                    <li><a class="tituloMenu" href="/sobre">Quem Somos</a></li>
                    <li><a class="tituloMenu" href="/contato">Contato</a></li>
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
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/o-que-sustenta-a-sustentabilidade-baixa-1000x500.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Reutilizar</h3>
                        <p>A ação de reutilizar um produto é poder dar uma nova utilidade para algo que, normalmente,
                            seria jogado fora</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/29.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Reciclar</h3>
                        <p>Promover uma reciclagem é a transformação de um produto que não pode ser mais utilizado em um
                            novo produto ou matéria-prima.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/30.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Reduzir</h3>
                        <p>O ato de diminuir o lixo e também a emissão de poluentes através de um consumo mais
                            consciente, poupando também os recursos naturais.</p>
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
 <footer>
        <section class="fot">
            <div class="ftr">
                <div class="contato">
                    <nav id="navCenter" class="container-fluid">
                        <div id="containerMeio" class="container-fluid">
                            <ul id="listaRedeSocial" class="row">
                                <label>Contato</label>
                                <li><a id="iconWhats" href="#" class="fa fa-whatsapp"></a></li>
                                <li><a id="iconFace" href="#" class="fa fa-facebook"></a></li>
                                <li><a id="iconTwitter" href="#" class="fa fa-twitter"></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div>
                    <label> Copyright © 2019 | MeSustenta </label>
                </div>
                <div>
                    <img src="img/logoMeSustenta.png" alt="Logo" class="imagemlogo">
                </div>
            </div>
        </section>
    </footer>
    <script src="{{asset('js/script.js')}}"></script>

    <!-- <script src="{{asset('js/script.js')}}"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>