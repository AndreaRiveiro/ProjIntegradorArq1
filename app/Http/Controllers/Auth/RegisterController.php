<?php

namespace App\Http\Controllers\Auth;

use App\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use     Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            "lastName"=>['required', 'string'],
            'data_nasc'=>['required','date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clientes'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'endereco'=> ['string'],
            'num_end'=>['integer'],
            'bairro'=>['string'],
            'uf'=>['string'],
            'cidade'=> ['string'],
            'cep'=> ['string'],
            'rg'=>['numeric'],
            'cpf'=> ['numeric']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Cliente
     */
    public function create(Request $data)
    {
        $novoCliente = new Cliente();
        $novoCliente->prim_nome = $data->name;
        $novoCliente->ult_nome = $data->lastName;
        $novoCliente->data_nasc = $data->data_nasc;
        $novoCliente->rg = $data->rg;
        $novoCliente->cpf = $data->cpf;
        $novoCliente->endereco = $data->endereco;
        $novoCliente->num_end = $data->num_end;
        $novoCliente->bairro = $data->bairro;
        $novoCliente->uf = $data->uf;
        $novoCliente->cidade = $data->cidade;
        $novoCliente->cep = $data->cep;
        $novoCliente->email = $data->email;
        $novoCliente->password = hash::make($data->password);
        $novoCliente->cliente_status = 1;
        $novoCliente->save();

        return redirect('/principal');
    }
}
