<?php

namespace App\Validator;

class VendedorValidator
{
	public static function validate($data) {
		$validator = \Validator::make($data, \App\Models\Vendedor::$rules, \App\Models\Vendedor::$messages);
		if(!$validator->errors()->isEmpty())
			throw new ValidationException($validator, "Erro na validação do Produto");
		return $validator;

	}
}
