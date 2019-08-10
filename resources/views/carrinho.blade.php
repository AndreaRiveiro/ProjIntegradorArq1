@extends('template')

@section('container')


<form action="/carrinho/finalizarCompra" method="post" class="form-pedido">
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
                            @php
                                $precoTotal = 0;
                            @endphp
                             @forelse($produtos as $produto)

                            @php
                            $precoTotal = $precoTotal + ($produto['qty'] * $produto['preco_venda']);
                            @endphp

                             <tr>
                            <td><img class="img-tamanho-carrinho" src="{{$produto['imagens']}}" /> </td>
                                <td class="hidden">{{ $produto['product_id'] }}</td>
                                <td>{{ $produto['nome_produto']}}</td>
                                <td>{{$produto['produto_status']}}</td>
                             <td><input class="form-control" type="text" value="{{$produto['qty']}}" /></td>
                            <td class="text-right">{{$produto['preco_venda']}}</td>
                             <td class="text-right"><a  href="/carrinho/remover/{{$produto['product_id']}}"class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
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
                            <td class="text-right">R$ {{$precoTotal}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Frete</td>
                            <td class="text-right">R${{10}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                            <td class="text-right"><strong>R${{$precoTotal + 10}}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                       <a  class="btn btn-lg btn-block btn-dark"href="/principal">Continue Comprando</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button class="btn btn-lg btn-block btn-success text-uppercase">Check Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</form >

@endsection





