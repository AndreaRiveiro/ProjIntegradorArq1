<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return view('categoria');
    }

    public function mostrarcategorias(Request $request){
         $todasCategorias = Categoria::all();
         return view('categoria');
    }
}

