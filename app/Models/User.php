<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users'; 

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'imagem',
    ];

    protected $hidden = [
        'senha', 
    ];

    public function getAuthPassword()
    {
        return $this->senha; 
    }
}
