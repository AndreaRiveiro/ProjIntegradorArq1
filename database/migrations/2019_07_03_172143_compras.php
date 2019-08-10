<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Compras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('idCompra');
            $table->date("data_entrega")->nullable();
            $table->dateTime("frete")->nullable();
            $table->unsignedBigInteger("fk_idCliente");
            $table->unsignedBigInteger("fk_idPagamento")->nullable();
            $table->timestamps();

            $table->foreign('fk_idCliente')->references('id')->on('clientes');
            $table->foreign('fk_idPagamento')->references('idPagamento')->on('pagamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
