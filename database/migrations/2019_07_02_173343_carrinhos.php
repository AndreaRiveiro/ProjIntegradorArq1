<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Carrinhos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrinhos', function (Blueprint $table) {
            $table->bigIncrements('idCarrinho');
            $table->string('codigoCliente');
            $table->datetime('dataDeEntrega');
            $table->string('dataDeEnvio')->nullable();
            $table->string('frete');
            $table->string('nomeDestinatario');
            $table->string('enderecoDestinatario');
            $table->string('cidadeDestino');
            $table->bigInteger('cepDestino');
            $table->string('carrinho_itens');
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
        Schema::dropIfExists('pedidos');
    }
}
