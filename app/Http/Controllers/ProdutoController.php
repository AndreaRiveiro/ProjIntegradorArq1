<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class ProdutoController extends Controller
{
    public function index(Request $request,$id)
    {

        $produto = Produto::find($id);
        $categoria = $produto->codigo_categoria;
        // $categoria = Categoria::find($categoria);
        // $categoria = $categoria->tipo_categoria;
        $produtos = Produto::where('codigo_categoria', "=", "$categoria")->get();
        return view('produto',["produto"=>$produto,"produtos"=>$produtos]);
    }

    public function busca(Request $request){

        $search = $request->search;
        if($search == ""){
            return redirect('/principal');
        }
        $mecanismo = Produto::where('nome_produto', 'LIKE', '%'.$search.'%')->get();
        return view('busca',['mecanismo'=>$mecanismo]);
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
        $novoProduto->codigo_fornecedor = $request->codigoFornecedor;
        $novoProduto->nome_loja = $request->nomeloja;
        $novoProduto->preco_venda = $request->precoVenda;
        $novoProduto->produto_status = $request->statusProduto;



        //Pegando o nome original do arquivo
         $nomeOriginal = $request->file('imagens')->getClientOriginalName();
         //Montando a url necessária para acessar o arquivo corretamente
         $caminhoimg  = '/storage/img/' . $nomeOriginal;

         //Salvando apenas a imagem
         $save = $request->file('imagens')->storeAs('public/img', $nomeOriginal);

         $novoProduto->imagens = $caminhoimg;



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


