<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function gravar(Request $form){//acessado animias.cadastrar via post, submetendo o form
        $dados = $form->validate([ //validar os dados antes do create
        //id, titulo, autor, editora, ano_publicacao, genero, sinopse, capa
        'titulo' => 'required',
        'autor' => 'required',
        'editora' => 'required',
        'ano_publicacao' => 'required',
        'genero' => 'required', 
        'sinopse' => 'required',
        'capa' => 'required'
        ]);

        $dados['password'] = Hash::make($dados['password']);

        Livro::create($dados);
        
        return redirect()->route('livros');
    }

    public function apagar( Livro $livro){
        return view('livros.apagar', [
            'livro' => $livro
        ]);
    }

    public function deletar(livro $livro){
        $livro->delete();
        return redirect()->route('Livros');
    }

    public function editar(livro $livro) {//apaga do banco
        return view('livros/editar', [
            'livro' => $livro
        ]);
    }

    public function editarGravar(Request $form, Livro $livro){
        $dados = $form->validate([
        //id, titulo, autor, editora, ano_publicacao, genero, sinopse, capa
        'titulo' => 'required',
        'autor' => 'required',
        'editora' => 'required',
        'ano_publicacao' => 'required',
        'genero' => 'required', 
        'sinopse' => 'required',
        'capa' => 'required'
        ]);

        $livro->fill($dados);
        $livro->save();
        return redirect()->route('livros');
    }

}
