<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UltimasBuscas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ultimas_buscas', function (Blueprint $table) {
            $table->bigIncrements('idUltimasBuscas');
            $table->string("nome_ult");
            $table->string("categoria_ult");
            $table->unsignedBigInteger('fk_idCliente');
            $table->unsignedBigInteger('fk_idCategoria');
            $table->timestamps();

            $table->foreign('fk_idCliente')->references('id')->on('clientes');
            $table->foreign('fk_idCategoria')->references('idCategoria')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ultimas__buscas');
    }
}
