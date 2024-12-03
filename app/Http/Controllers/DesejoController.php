<?php

namespace App\Http\Controllers;

use App\Models\Desejo;
use Illuminate\Http\Request;

class DesejoController extends Controller
{
    public function index(){
        $dados = Desejo::all();
        return view('desejos.index', [
            'desejos' => $dados,
        ]);
    }
}
