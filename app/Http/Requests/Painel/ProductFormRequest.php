<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required| min : 3',
            'classe' => 'required| min : 3',
            'tamanho' => 'required',
            'preco' => 'required|numeric|min:20',
        ];
    }
    public function messages()
    {
        return[
            'nome.required' => 'O nome é obrigatório!',
            'classe.required' => 'A classe é obrigatória!',
            'tamanho.required' => 'O tamanho é obrigatório!',
            'preco.required' => 'O preço é obrigatório!',
            'preco.numeric' => 'Apenas números!',

        ]
    }
}
