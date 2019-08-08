<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("prim_nome");
            $table->string("ult_nome");
            $table->date('data_nasc')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string("endereco")->nullable();
            $table->integer('num_end')->nullable();
            $table->string('bairro')->nullable();
            $table->string('uf')->nullable();
            $table->string("cidade")->nullable();
            $table->integer('cep')->nullable();
            $table->bigInteger('rg')->nullable();
            $table->bigInteger("cpf")->nullable();
            $table->bigInteger("cliente_status");
            $table->bigInteger("nivel_user");
            $table->string("img")->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('clientes');
    }
}
