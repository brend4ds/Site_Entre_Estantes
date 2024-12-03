<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index(){
        $dados = Livro::all();
        //dd($dados); //funcao mais importante do laravel
        return view('livros.index', [
            'livros' => $dados,
        ]);
    }

    public function cadastrar(){
        return view('livros.cadastrar');
    }
}
