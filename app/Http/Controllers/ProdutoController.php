<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('produto');
    }

    public function produtosgerais(Request $request)
    {
        // if($request->isMethod('GET')){
            $todosProdutos = Produto::all();
        return view('produtosGerais',['todosProdutos'=>$todosProdutos]);
    }

    public function create(Request $request){

        $data = $request->all();

         if($request->isMethod('GET')){
            return view('cadastroProduto');

        }

        $novoProduto = new Produto();
        $novoProduto->nome_produto = $request->nomeProduto;
        $novoProduto->tipo_produto = $request->tipoProduto;
        $novoProduto->codigo_do_produto = $request->codigoProduto;
        $novoProduto->codigo_categoria = $request->codigoCategoria;
        $novoProduto->quantidade_em_estoque = $request->quantidadeEstoque;
        $novoProduto->estoque_maximo = $request->estoqueMaximo;
        $novoProduto->descricao_prod = $request->descricao;
        $novoProduto->departamento = $request->departamento;
        $novoProduto->codigo_fornecedor = $request->codigoFornecedor;
        $novoProduto->nome_loja = $request->nomeloja;
        $novoProduto->preco_venda = $request->precoVenda;
        $novoProduto->produto_status = $request->statusProduto;
        $novoProduto->imagens = $request->imagens;
        


        $resultado = $novoProduto->save();

                    
        return view('cadastroProduto',["resultado" => $resultado]);

        }

        
    
     
    public function editar(Request $request, $id){
        if($request->isMethod('GET')){
            $produto = Produto::find($id);
            return view('editarProduto',["produto"=>$produto]);
        }

        $produto = Produto::find($request->idProduto);
        $produto->nome_produto = $request->nomeProduto;
        $produto->tipo_produto = $request->tipoProduto;
        $produto->codigo_do_produto = $request->codigoProduto;
        $produto->codigo_categoria = $request->codigoCategoria;
        $produto->quantidade_em_estoque = $request->quantidadeEstoque;
        $produto->estoque_maximo = $request->estoqueMaximo;
        $produto->descricao_prod = $request->descricao;
        $produto->departamento = $request->departamento;
        $produto->codigo_fornecedor = $request->codigoFornecedor;
        $produto->nome_loja = $request->nomeloja;
        $produto->preco_venda = $request->precoVenda;
        $produto->produto_status = $request->statusProduto;
        $resultado = $produto->save();

        return redirect()
            ->route('produtosGerais')
            ->with("resultado", $resultado)
           ->with( "produto",$produto);
    }


}


