@extends('template')

@section('container')
<h1>Carrinho</h1>
<ul>

<form action="/carrinho" method="post" class="form-pedido">
@csrf

<div class="container">

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th class="validar carrinho" colspan="3">Produtos</th>
            <th>Remover</th>
            <th>Quantidade</th>
            <input type="hidden" class="idCarrinho" nome="idCarrinho">
            <input type="hidden" class="itens" nome="carrinho_itens">
            <input type="hidden" class="codCliente" nome="codigoCliente">

            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($produtos as $produto)
            <tr>

              <td>{{ $produto->idProduto }}</td>
              <td>{{ $produto->nome_produto}}</td>
              <td>{{ $produto->quantidade_em_estoque}}</td>
              <td></td>
            </tr>
          @endforeach
        </tbody>
        </table>

        <div>

        </div>


</form>

@endsection





