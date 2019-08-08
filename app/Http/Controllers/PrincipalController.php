<?php

namespace App\Http\Controllers;
use App\Categoria;
use App\Produto;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $produtos = Produto::all()->take(3);
        return view('principal',["categorias"=>$categorias,"produtos"=>$produtos]);
    }
}
