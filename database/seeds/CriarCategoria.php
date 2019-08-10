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
            $alimentos->imagensCategoria = "/img/cestaabundancia.jpg";
            $alimentos->tipo_categoria = "Alimentos";
            $alimentos->descricao = "Alimentos bons";
            $alimentos->save();

            $beleza = new Categoria();
            $beleza->imagensCategoria = "/img/cosmeticos-naturais.jpg";
            $beleza->tipo_categoria = "Beleza";
            $beleza->descricao = "Produtos Bons";
            $beleza->save();

            $casa = new Categoria();
            $casa->imagensCategoria ="/img/honestComp.jpg";
            $casa->tipo_categoria = "Casa";
            $casa->descricao = "Produtos Casa";
            $casa->save();



    }
}
