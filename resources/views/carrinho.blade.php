@extends('template')

@section('container')


<form action="/carrinho" method="post" class="form-pedido">
@csrf


<section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Carrinho de Compras</h1>
         </div>
    </section>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"> </th>
                                <th scope="col">Produto</th>
                                <th scope="col">Disponivel</th>
                                <th scope="col" class="text-center">Quantidade</th>
                                <th scope="col" class="text-right">Preço</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>


                             @forelse($produtos as $produto)

                             <tr>
                            <td><img class="img-tamanho" src="{{$produto->imagens}}" /> </td>
                                <td class="hidden">{{ $produto->idProduto }}</td>
                                <td>{{ $produto->nome_produto}}</td>
                                <td>{{$produto->produto_status}}</td>
                                <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">{{$produto->preco_venda}}</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                            @empty
                            <h2>Carrinho vazio</h2>
                        </tr>
                              @endforelse



                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Sub-Total</td>
                                <td class="text-right">255,90 €</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Shipping</td>
                                <td class="text-right">6,90 €</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td class="text-right"><strong>346,90 €</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <button class="btn btn-block btn-light">Continue Comprando</button>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button class="btn btn-lg btn-block btn-success text-uppercase"><a href="/carrinho/adicionar/{{$produto->idProduto}}">Check Out</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</form >

@endsection





