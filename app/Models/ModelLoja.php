<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelLoja extends Model
{
	protected $fillable = [
        'imagem', 'classe', 'nome', 'tamanho', 'preco'
    ];
    public static $rules= [ 'imagem' => 'required',
                            'nome' => 'required| min : 3',
                            'classe' => 'required| min : 3',
                            'tamanho' => 'required',
                            'preco' => 'required|numeric|min:20', ];

    public static $messages = [ 'imagem.required' => 'Precisa de uma imagem',
                                'nome.required' => 'Precisa de um nome',
                                'nome.min' => 'Minímo 3 letras',
                                'classe.required' => 'Precisa de uma classe',
                                'classe.min' => 'Minímo 3 letras',
                                'tamanho.required' => 'Precisa de um tamanho',
                                'preco.required' => 'Precisa de um preço',
                                'preco.numeric' => 'Tem que ser número',
                                'preco.min' => 'Minímo 20 reais',
                            ];
     protected $table='loja';                            
    /*declara que um item pode ter somente um vendedor
    public function relVendedor()
    {
        return $this->hasOne('App\Vendedor', 'id', 'id_user');
    }*/

    
   
                       

}
