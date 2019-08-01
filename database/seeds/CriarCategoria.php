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
        {
            $alimentos = new Categoria();
            $alimentos->idCategoria = "Alimentos";
            $alimentos->tipo_categoria = "Alimentos";
            $alimentos->descricao = "Alimentos bons";
            $alimentos->save();

        }

        {
            $beleza = new Categoria();
            $beleza->idCategoria = "Beleza";
            $beleza->tipo_categoria = "Beleza";
            $beleza->descricao = "Produtos Bons";
            $beleza->save();

        }
    }
}
