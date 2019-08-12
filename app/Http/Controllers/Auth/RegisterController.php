<?php

namespace App\Http\Controllers\Auth;

use App\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    public function index()
    {
        return view('cadastroAdmin');
    }
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
    protected $redirectTo = '/principal';

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
            // "lastName"=>['required', 'string'],
            // 'data_nasc'=>['required','date'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:clientes'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'endereco'=> ['string'],
            // 'num_end'=>['integer'],
            // 'bairro'=>['string'],
            // 'uf'=>['string'],
            // 'cidade'=> ['string'],
            // 'cep'=> ['string'],
            // 'rg'=>['numeric'],
            // 'cpf'=> ['numeric']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Cliente
     */
     protected function create(array $data)
    {
        // dd($data);
        return Cliente::create([
            'prim_nome' => $data['name'],
            'ult_nome'=>$data['lastName'],
            'endereco' => $data['endereco'],
            'num_end' => $data['num_end'],
            'bairro' => $data['bairro'],
            'uf' => $data['uf'],
            'cidade' => $data['cidade'],
            'cep' => $data['cep'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cliente_status' => 1,
            'nivel_user' => 1,
        ]);
    }

    protected function createAdmin(array $data)
    {
        //Pegando o nome original do arquivo
        $nomeOriginal = $data['avatar']->getClientOriginalName();
        //Montando a url necessária para acessar o arquivo corretamente
        $caminhoimg  = 'storage/img/' . $nomeOriginal;

        //Salvando apenas a imagem
        $save = $data['avatar']->storeAs('public/img', $nomeOriginal);

        return Cliente::create([
            'prim_nome' => $data['name'],
            'ult_nome'=>$data['lastName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nivel_user' => '0',
            'img' => $caminhoimg
        ]);
    }


    //  public function create(Request $data)
    //  {
    //     // $novoCliente = new Cliente();
    //     //  $novoCliente->prim_nome = $data->name;
    //     //  $novoCliente->ult_nome = $data->lastName;
    //     //  $novoCliente->data_nasc = $data->data_nasc;
    //     //  $novoCliente->rg = $data->rg;
    //     //  $novoCliente->cpf = $data->cpf;
    //     //  $novoCliente->endereco = $data->endereco;
    //     //  $novoCliente->num_end = $data->num_end;
    //     //  $novoCliente->bairro = $data->bairro;
    //     //  $novoCliente->uf = $data->uf;
    //     //  $novoCliente->cidade = $data->cidade;
    //     //  $novoCliente->cep = $data->cep;
    //     //  $novoCliente->email = $data->email;
    //     //  $novoCliente->password = hash::make($data->password);
    //     //  $novoCliente->nivel_user = 1;
    //     //  $novoCliente->cliente_status = 1;
    //     //  $novoCliente->save();
    //     //  return $novoCliente;
    //  }
}
