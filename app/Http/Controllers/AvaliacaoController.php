<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    public function index(){
        $dados = Avaliacao::all();
        return view('avaliacoes.index', [
            'avaliacoes' => $dados,
        ]);
    }
}
