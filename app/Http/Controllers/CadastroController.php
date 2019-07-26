<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Cliente;
class CadastroController extends Controller
{
    public function index()
    {
        return view('cadastro');
    }

    public function mostrar()
    {
        return view('editarCadastroClientes');
    }

    public function editar(Request $request, $id){
                if($request->isMethod('GET')){
                    $cliente = Cliente::find($request->id);
                   
                 return view('editarCadastroClientes', ['cliente'=>$cliente]);
                }   
                    $cliente = Cliente::find($request->id);
                    $cliente->prim_nome = $request->name;
                    $cliente->ult_nome = $request->lastName;
                    $cliente->data_nasc = $request->data_nasc;
                    $cliente->rg = $request->rg;
                    $cliente->cpf = $request->cpf;
                    $cliente->endereco = $request->endereco;
                    $cliente->num_end = $request->num_end;
                    $cliente->bairro = $request->bairro;
                    $cliente->uf = $request->uf;
                    $cliente->cidade = $request->cidade;
                    $cliente->cep = $request->cep;
                    $cliente->email = $request->email;
                    $cliente->password = hash::make($request->password);
                    $cliente->cliente_status = 1;
                    $cliente->save();

                    return ('Dados alterados com sucesso');
            }
            // alert("Você precisa fazer Login!!");
            // return view('principal');
      }
 