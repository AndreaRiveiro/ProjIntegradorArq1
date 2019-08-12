<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Cliente;

class LoginAndrea extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Cliente();
        $admin->prim_nome = 'Andréa';
        $admin->ult_nome = 'Riveiro';
        $admin->email = 'dearivi@email.com';
        $admin->password =hash::make("12345678"); 
        $admin->nivel_user = 1;
        $admin->img = "storage/img/girl.png";
        $admin->cliente_status = 1;
        $admin->save();
    }
}
