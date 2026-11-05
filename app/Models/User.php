<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // 1. Diz explicitamente qual é a sua tabela no banco
    protected $table = 'users'; // ou 'usuarios', dependendo de como está no seu banco

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
