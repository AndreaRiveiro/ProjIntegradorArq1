<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;

class CategoriaController extends Controller
{
    public function index($id="todos")
    {

        $todasCategorias = Categoria::all();

        if($id == "todos"){
            $produtos = Produto::all();
        }else {
            $produtos = Produto::where('codigo_categoria', $id)->get();
        }
        return view('categoria',['categorias'=>$todasCategorias,'produtos'=>$produtos]);
    }


  }

