<?php

use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\DesejoController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('iniciar');
}) -> name('index');

//Livros
Route::get('/livros', [LivroController::class, 'index'])->name('livros'); //quando acessar o get ele vai pegar a classe e acessar o index
Route::get('/livros/cadastrar', [LivroController::class, 'cadastrar']) -> name('livros.cadastrar');
Route::post('/livros/cadastrar', [LivroController::class, 'gravar']) -> name('livros.gravar');

//Gêneros
Route::get('/generos', [GeneroController::class, 'index'])->name('generos');

//Desejos
Route::get('desejos', [DesejoController::class, 'index'])->name('desejos');

//Avaliações
Route::get('avaliacoes', [AvaliacaoController::class, 'index'])->name('avaliacoes');

//Login

Route::get('login', [UsuariosController::class,'login'])->name('login');
Route::post('login', [UsuariosController::class,'login']);

//Logout
Route::get('logout', [UsuariosController::class, 'logout'])->name('logout');

//User
Route::prefix('usuarios')->middleware('auth')->group(function(){
    Route::get('/', [UsuariosController::class, 'index'])->name('usuarios');
    Route::get('/cadastrar', [UsuariosController::class, 'cadastrar'])->name('usuarios.cadastrar');
    Route::post('/cadastrar', [UsuariosController::class, 'gravar'])->name('usuarios.gravar');
    //Route::get('/apagar/{usuario}', [UsuariosController::class, 'apagar'])->name('usuarios.apagar');
    //Route::delete('/apagar/{usuario}', [UsuariosController::class,'deletar']);
    //Route::get('/editar/{usuario}', [UsuariosController::class, 'editar'])->name('usuarios.editar');
    //Route::put('/editar/{usuario}', [UsuariosController::class, 'editarGravar']);
});