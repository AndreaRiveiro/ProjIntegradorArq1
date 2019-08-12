<?php
use App\Http\Controllers\CarrinhoController;

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
Auth::routes();
// Rotas Admin - início
Route::get('/index',function(){
    return view('index');
})->middleware('checkadmin');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');

Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/cadastroAdmin','Auth\RegisterController@index');
Route::post('/cadastroAdmin', 'Auth\RegisterController@createAdmin');

// Rotas Admin - Fim

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/teste', function() {
    return view('test');
});


// Rotas principais

Route::get('/principal/{login?}',"PrincipalController@index")->name('principal');
Route::get('/',"PrincipalController@index");

Route::get('/cadastro','CadastroController@index');
Route::post('/cadastro', 'Auth\RegisterController@create');
Route::get('/contato','ContatoController@index');
Route::get('/sobre', 'SobreController@index');
Route::get('/alimentos', 'AlimentosController@index');
Route::get('/categoria','CategoriaController@index');
Route::get('/pedido','PedidoController@index');
Route::get('/password','passwordController@index');


// Rotas Produto
Route::get('/produtosGerais','ProdutoController@produtosgerais')->name('produtosGerais');

Route::get('/produto/{id}', 'ProdutoController@index');

Route::get('/cadastroProduto','ProdutoController@create');
Route::post('/cadastroProduto', 'ProdutoController@create');

Route::get('/produto/editar/{id}',"ProdutoController@editar");
Route::post('/produto/editar/{id}',"ProdutoController@editar");

// Route::deletar('/produto/excluir','PedidoController@excluir');
Route::get('/index',function(){

    return view('index');
});

// Routes Pedido + Carrinho
    Route::get('/carrinho','CarrinhoController@exibir');
    Route::get('/carrinho/exibir', 'CarrinhoController@exibir');

Route::get('/carrinho/exibir', 'CarrinhoController@exibir');

Route::get('/carrinho/adicionar/{id}','CarrinhoController@adicionar');
Route::post('/carrinho/adicionar/{id}','CarrinhoController@adicionar');

 Route::get('/carrinho/remover/{id}','CarrinhoController@remover');
 Route::post('/carrinho/finalizarCompra','CarrinhoController@finalizarCompra')->middleware('auth');
//  Route::post('orders/finalizarCompra', ['as' => 'finalizarCompra', 'uses' => 'OrdersController@finalizarCompra']);

// Route Categoria

Route::get('/categoria/{id?}','CategoriaController@index');

// Busca

Route::post('/busca','ProdutoController@busca');


/* Logout */
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/* Editar Cadastro Cliente*/
Route::get('/editarCadastro/{id}','CadastroController@editar')->middleware('auth');
Route::post('/editarCadastro/{id}','CadastroController@editar')->middleware('auth');






