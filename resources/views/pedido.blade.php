@extends('template')

@section('container')

<h1>Pedido</h1>

<form action="/pedido" method="post" class="form-pedido">
@csrf

<div class="container">

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th class="validar carrinho" colspan="3">Produtos</th>
            <th>Remover</th>
            <th>Quantidade</th>
            <input type="hidden" class="idPedido" nome="idPedido">
            <input type="hidden" class="itens" nome="pedido_itens">
            <input type="hidden" class="codCliente" nome="codigoCliente">
            
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($resultado as $resultado)
            <tr>
              <td>{{ $product_id->idProduto }}</td>           
              <td>{{ $itens->item }}</td>
              <td>{{ $nomeproduto->nome_produto}}</td>
              <td>{{ $qty->quantidade}}
              <td>
                <a class="btn deep-orange" href="{{ route() }}">Editar</a>
                <a class="btn red" href="{{ route() }}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
</table>
       

        <button type="submit">Fechar Pedido</button>

</form>

</div>



@if(isset($resultado))

    @if($resultado)
    
        <h1>Compra Concluida!</h1>
    @else
        <h1>Erro ao tentar comprar!</h1>
    @endif    

@endif

@endsection