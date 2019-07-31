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
            $alimentos->idCategoria = 01400000;
            $alimentos->tipo_categoria = "Alimentos";
            $alimentos->descricao = "Alimentos bons";
            $alimentos->departamento = "TEste";
            $alimentos->save();

        }
    }
}
