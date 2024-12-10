<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $table = 'usuarios';

    protected $fillable = [
        'id',
        'name',
        'email',
        'username',
        'password',
        'admin'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

        function getAuthIdentifierName(){//autentifica o id
            return 'id';
        }
        function getAuthIdentifier(){
            return $this->id;
        }
        function getAuthPassword(){
            return $this->password;
        }
        function getRememberToken(){

        }
        function setRememberToken($value){

        }
        function getRememberTokenName(){

        }
}
