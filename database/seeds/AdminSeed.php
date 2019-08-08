<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Cliente;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $admin = new Cliente();
            $admin->prim_nome = 'Admin';
            $admin->ult_nome = 'Sistema';
            $admin->email = 'admin@email.com';
            $admin->password =hash::make("12345678"); 
            $admin->nivel_user = 0;
            $admin->img = "storage/img/girl.png";
            $admin->cliente_status = 1;
            $admin->save();
        }
    }
}

           