@extends('template')

@section('container')
<h1>Editar Produtos</h1>

<form action="/produto/editar/{{$produto->idProduto}}" method="post" >
@csrf

            <div>
                <input type="text" name="idProduto" value="{{$produto->idProduto}}"hidden>
                <label>Nome do Produto</label>
                <input type="text" class="form-control casds" name="nomeProduto" value="{{$produto->nomeProduto}}">
                <label>Tipo do Produto</label>
                <input type="text" class="form-control casds" name="tipoProduto" value="{{$produto->tipoProduto}}">
            </div>
            <div>
                <label>Código do Produto</label>
                <input type="number" class="form-control casds" name="codigoProduto" value="{{$produto->codigoProduto}}">
                <label>Código Categoria</label>
                <input type="number" class="form-control casds" name="codigoCategoria" value="{{$produto->codigoCategoria}}">
            </div>
            
            
            <div>
                <label>Quantidade em Estoque</label>
                <input type="number" class="form-control casds" name="quantidadeEstoque" value="{{$produto->quantidadeEstoque}}">
                <label>Estoque Máximo</label>
                <input type="number" class="form-control casds" name="estoqueMaximo" value="{{$produto->estoqueMaximo}}">
            </div>
            <div>
                <label>Descrição do Produto</label>
                <input type="text" class="form-control casds" name="descricao" value="{{$produto->descricao}}">
            </div>
            <div>
                <label>Departamento</label>
                <input type="text" class="form-control casds" name="departamento" value="{{$produto->departamento}}">
                <label>Código do Fornecedor</label>
                <input type="number" class="form-control casds" name="codigoFornecedor" value="{{$produto->codigoFornecedor}}">
                <label>Nome da Loja</label>
                <input type="text" class="form-control casds" name="nomeloja" value="{{$produto->nomeLoja}}">
            </div>
            <div>
                <label>Preço de Venda</label>
                <input type="number" class="form-control casds" name="precoVenda" value="{{$produto->precoVenda}}">
            </div>
            <div>
                <label>Status do Produto</label>
                <input type="text" class="form-control casds" name="statusProduto" value="{{$produto->statusProduto}}">
            </div>


        </div>


    <button type="submit">Editar Produto</button>

</form>

@if(isset($resultado))
    @if($resultado)
        <h1>Edição Concluida!</h1>
    @else
        <h1>Erro ao tentar editar!</h1>
    @endif    

@endif

@endsection