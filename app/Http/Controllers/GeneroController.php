<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function index(){
        $dados = Genero::all();
        return view('generos.index', [
            'generos' => $dados,
        ]);
    }
}
