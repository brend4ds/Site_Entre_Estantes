<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'desejos';

    protected $fillable = [
        'id',
        'nome',
    ];
}
