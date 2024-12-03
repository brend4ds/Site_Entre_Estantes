<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{

    protected $table = 'avaliacoes';

    protected $fillable = [
        'id',
        'usuario_id',
        'livro_id',
        'nota',
        'comentario',
        'data_avaliacao'
    ];
}
