<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Itens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens', function (Blueprint $table) {
            $table->bigIncrements('idItem');
            $table->decimal("numero_item", 45);
            $table->string("nome_item", 45);
            $table->unsignedBigInteger("fk_idCompra");
            $table->decimal("valor_unitario", 45);
            $table->timestamps();

            $table->foreign('fk_idCompra')->references('idCompra')->on('compras');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens');
    }
}
