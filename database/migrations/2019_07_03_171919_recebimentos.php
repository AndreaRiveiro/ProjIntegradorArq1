<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recebimentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recebimentos', function (Blueprint $table) {
            $table->bigIncrements('idRecebimento');
            $table->string("nome_produto");
            $table->string("pagamento");
            $table->string("descricao");
            $table->unsignedBigInteger("fk_idPagamento");
            $table->timestamps();

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
        Schema::dropIfExists('recebimentos');
    }
}
