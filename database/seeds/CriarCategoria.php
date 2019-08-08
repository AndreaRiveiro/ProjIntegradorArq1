<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CriarCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $alimentos = new Categoria();
            $alimentos->
            $alimentos->tipo_categoria = "Alimentos";
            $alimentos->descricao = "Alimentos bons";
            $alimentos->save();

            $beleza = new Categoria();
            $beleza->
            $beleza->tipo_categoria = "Beleza";
            $beleza->descricao = "Produtos Bons";
            $beleza->save();

            $casa = new Categoria();
            $casa->
            $casa->tipo_categoria = "Casa Mesa e Banho";
            $casa->descricao = "Produtos Casa";
            $casa->save();



    }
}
