<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('template');
});

Route::get('/teste', function() {
    return view('welcome');
});


// Rotas principais

Route::get('/principal',"PrincipalController@index");


Route::get('/home',"PrincipalController@index");

Route::get('/cadastro','CadastroController@index');

Route::get('/contato','ContatoController@index');
Route::get('/sobre', 'SobreController@index');
Route::get('/alimentos', 'AlimentosController@index');
Route::get('/departamentos','DepartamentoController@index');
Route::get('/carrinho', 'PedidoController@index');
Route::get('/pedido','PedidoController@index');
Route::get('/password','passwordController@index');


// Rotas Produto
Route::get('/produtosGerais','ProdutoController@produtosgerais')->name('produtosGerais');

Route::get('/produto', 'ProdutoController@index');

Route::get('/cadastroProduto','ProdutoController@create');
Route::post('/cadastroProduto', 'ProdutoController@create');

Route::get('/produto/editar/{id}',"ProdutoController@editar"); 
Route::post('/produto/editar/{id}',"ProdutoController@editar");

// Route::deletar('/produto/excluir','PedidoController@excluir');


// Routes Pedido + Carrinho 

Route::get('/carrinho','CarrinhoController@index');

Route::get('/carrinho/exibir', 'CarrinhoController@exibir');
Route::post('/carrinho/exibir', 'CarrinhoController@exibir');

Route::get('/carrinho/adicionar/{id}','CarrinhoController@adicionar');
Route::post('/carrinho/adicionar/{id}','CarrinhoController@adicionar');

// Route::deletar('/carrinho/remover','PedidoController@remover');



/* Logout */                   


/* Editar Cadastro Cliente*/   



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
