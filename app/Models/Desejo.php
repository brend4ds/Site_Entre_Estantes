<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desejo extends Model
{
    protected $table = 'desejos';

    protected $fillable = [
        'id',
        'usuario_id',
        'livro_id'
    ];
}
