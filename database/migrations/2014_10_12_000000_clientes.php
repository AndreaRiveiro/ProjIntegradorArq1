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
            $table->string("endereco");
            $table->integer('num_end');
            $table->string('bairro');
            $table->string('uf');
            $table->string("cidade");
            $table->integer('cep');
            $table->bigInteger('rg')->nullable();
            $table->bigInteger("cpf")->nullable();
            $table->bigInteger("cliente_status");
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
