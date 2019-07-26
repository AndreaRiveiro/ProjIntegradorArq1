<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('idProduto');
            $table->string("nome_produto");
            $table->string("tipo_produto");
            $table->string("descricao_prod");
            $table->decimal("preco_venda");
            $table->string("imagens")->nullable();
            $table->string("codigo_do_produto");
            $table->string("codigo_categoria");
            $table->string("codigo_fornecedor");
            $table->string("departamento");
            $table->decimal("quantidade_em_estoque");
            $table->string("nome_loja");
            $table->decimal("estoque_maximo");
            $table->string("produto_status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
