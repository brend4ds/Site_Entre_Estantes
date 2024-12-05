<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GeneroController extends Controller
{
    public function index(){
        $dados = Genero::all();
        return view('generos.index', [
            'generos' => $dados,
        ]);
    }

    public function cadastrar(){
        return view('generos.cadastrar');
    }

    public function gravar(Request $form){//acessado animias.cadastrar via post, submetendo o form
        $dados = $form->validate([ //validar os dados antes do create
        //id, nome
        'nome' => 'required'
        ]);

        $dados['password'] = Hash::make($dados['password']);

        Genero::create($dados);
        
        return redirect()->route('generos');
    }

    public function apagar( Genero $genero){
        return view('generos.apagar', [
            'genero' => $genero
        ]);
    }

    public function deletar(Genero $genero){
        $genero->delete();
        return redirect()->route('Generos');
    }

    public function editar(Genero $genero) {//apaga do banco
        return view('generos/editar', [
            'genero' => $genero
        ]);
    }

    public function editarGravar(Request $form, Genero $genero){
        $dados = $form->validate([
        //id,nome
        'nome' => 'required'

        ]);

        $genero->fill($dados);
        $genero->save();
        return redirect()->route('generos');
    }
}
