<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Carrinho;
use App\Produto;
use App\Compra;
use App\Item;

class CarrinhoController extends Controller
{
    public function index(Request $request)
    {
        $produtos = Carrinho::all();
        return view('carrinho',['produtos'=>$produtos]);
    }


    public function exibir(Request $request){
             //$request->session()->flush();
        if($request->session()->has("carrinho")){

            $carrinho = $request->session()->get("carrinho");
        $produtos=[];
       foreach($carrinho as $item){

           $produto = Produto::find($item['product_id']);

            $item['nome_produto'] = $produto->nome_produto;
            $item['imagens'] = $produto->imagens;
            $item['produto_status'] = $produto->produto_status;
            $item['preco_venda'] = $produto->preco_venda;
            $produtos[] = $item;

       }

        return view('carrinho',["produtos" => $produtos]);
        }else {
            return view('carrinho',["produtos" => []]);
        }


    }

    public function adicionar(Request $request, $id){
       // dd(Produto::find($id));

            if(Produto::find($id) == null) {
                return "produto nao existe";
            }

            if(!$request->session()->has("carrinho")){
                $request->session()->put('carrinho', [
                    [
                        'product_id'     => $id,
                        'qty'             => 1,
                    ]
                ]);
                return redirect('/carrinho/exibir');
            }

            $carrinho = $request->session()->get("carrinho");
            //>=0 || ==true
            if(($key = array_search($id, array_column($carrinho, 'product_id')))!== false){

                $carrinho[$key]['qty']++;
                $request->session()->put("carrinho",$carrinho);
                return redirect('/carrinho/exibir');
            }

           $carrinho = $request->session()->get("carrinho");
           $carrinho[]= [
               "product_id" => $id,
               "qty" => 1
           ];

           $request->session()->put("carrinho",$carrinho);
           return redirect('/carrinho/exibir');
    }

    public function remover(Request $request,$id){

        $carrinho = $request->session()->get("carrinho");

        if($carrinho == null || count($carrinho) == 0){
            return redirect('/carrinho/exibir');
        }

        //procurando o id dentro da array carrinho
        $key = array_search($id, array_column($carrinho, 'product_id'));

       unset($carrinho[$key]);


        $request->session()->put("carrinho",$carrinho);


        return redirect('/carrinho/exibir');

    }

    public function finalizarCompra(Request $request){

        if($request->session()->has('carrinho')){

            $carrinho = $request->session()->get('carrinho');

            $user = Auth::user();

            $novaCompra = new Compra();
            $novaCompra->fk_idCliente = $user->id;
            $novaCompra->save();

            foreach($carrinho as $produto){
                $novoItemCompra = new Item();
                $novoItemCompra->nome_item = 'bug';
                $novoItemCompra->valor_unitario = 10;
                $novoItemCompra->numero_item = $produto["qty"];
                $novoItemCompra->fk_idCompra = $novaCompra->idCompra;
                $novoItemCompra->save();
            }

            $request->session ()->flush();
            return redirect('principal');

           } else {

                $carrinho = [];
                $request->session()->put('carrinho', $carrinho);
                return redirect('/carrinho');

           }
        }
    }





// public function add(Request $res, $idProduct){
//     //pergunta se existe uma sessão ativa

//    if($res->session()->has('cart')){
//        $cart = $res->session()->get('cart');

//       //pegar as info do usuario
//        $user = Auth::user();
//        //criar uma nova compra
//        $newOrder = new Orders();
//        $newOrder->user_id = $user->id;
//        $newOrder->save();

//        foreach ($cart as $product) {
//            $newItemOrder = new ItemOrder();
//            $newItemOrder->product_id = $product;
//            $newItemOrder->orders_id = $newOrder->id;
//            $newItemOrder->save();
//        }
//        $res->session ()->flush();
//        return redirect('home');

//    }else {
//        $cart = [$idProduct];
//        $res->session()->put('cart', $cart);
//        return redirect('/cart');
//    }
// }
