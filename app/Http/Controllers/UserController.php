<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(){
        $dados = User::orderBy('name', 'asc')->get();
        //dd($dados); //funcao mais import do laravel
        return view('usuarios.index', [
            'usuarios' => $dados,
        ]);
    }

    public function login(Request $form){//mostra o form(get) e validar o login(post)

        if($form->isMethod('POST')){//se o metodo é post
            $credenciais = $form->validate([
                'username' => 'required',
                'password' => 'required',
            ]);

            //tenta fzr o login
            if(Auth::attempt($credenciais)){
                return redirect()->intended(route('index'));//metodo intented rota q a pessoa ta querendo ir, intencional
                //colocar route index p intended procurar a rota e nao o endereco index
            }else{
                return redirect()->route('login')->with('erro', 'Usuário ou senha inválidos');
            }
        }

        return view('usuarios.login');//se o metodo é get
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
