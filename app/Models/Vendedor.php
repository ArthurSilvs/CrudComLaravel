<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $fillable = [
        'nome', 'email', 'senha', 'telefone'
    ];


    public static $rules = [
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required| min : 3',
            'telefone' => 'required | min : 7 ',
         ];

    public static $messages = [     
            'nome.required' => 'Precisa de um nome',
            'email.required' => 'Precisa de um email',
            'senha.required' => 'Precisa de uma senha',
            'senha.min' => 'Minimo 3 caracteres',
            'telefone.required' => 'Tem que ter o número',
            'telefone.numeric' => 'Tem que ser número',
            'telefone.min' => 'Tem que ter no minimo 9 números',
         ];
}
