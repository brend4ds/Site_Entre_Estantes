<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model 
{
    protected $table = 'livros';

    protected $fillable = [
        'id',
        'itulo',
        'autor',
        'editora',
        'ano_publicacao',
        'genero',
        'sinopse',
        'capa'
    ];
}
