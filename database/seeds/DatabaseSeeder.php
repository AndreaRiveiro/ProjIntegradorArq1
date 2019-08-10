<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CriarCategoria::class);
        $this->call(AdminSeed::class);
        $this->call(CadastrarProdutosSeeder::class);
        // $this->call(PagamentoSeed::class);
    }
}
