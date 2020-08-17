<?php

namespace Tests\Unit;

use Tests\TestCase;

class VendedorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testVendedorSemNome()
    {
    	$this->expectException(\App\Validator\ValidationException::class);
    		$vendedor = factory(\App\Models\Vendedor::class)->make();
    	$vendedor->nome="";

    	\App\Validator\VendedorValidator::validate($vendedor->toArray());
    }   

    public function testVendedorSemEmail()
    {
    	$this->expectException(\App\Validator\ValidationException::class);
    		$vendedor = factory(\App\Models\Vendedor::class)->make();
    	$vendedor->email="";

    	\App\Validator\VendedorValidator::validate($vendedor->toArray());
    }

    public function testVendedorSemSenha()
    {
    	$this->expectException(\App\Validator\ValidationException::class);
    		$vendedor = factory(\App\Models\Vendedor::class)->make();
    	$vendedor->senha="";

    	\App\Validator\VendedorValidator::validate($vendedor->toArray());
    }


    public function testVendedorSenhaMenorQueTres()
    {
    	$this->expectException(\App\Validator\ValidationException::class);
    		$vendedor = factory(\App\Models\Vendedor::class)->make();
    	$vendedor->senha="pa";

    	\App\Validator\VendedorValidator::validate($vendedor->toArray());
    }

    public function testVendedorSemTelefone()
    {
    	$this->expectException(\App\Validator\ValidationException::class);
    		$vendedor = factory(\App\Models\Vendedor::class)->make();
    	$vendedor->telefone="";

    	\App\Validator\VendedorValidator::validate($vendedor->toArray());
    }


    public function testVendedorTelefoneMenorQueSete()
    {
    	$this->expectException(\App\Validator\ValidationException::class);
    		$vendedor = factory(\App\Models\Vendedor::class)->make();
    	$vendedor->telefone="123456";

    	\App\Validator\VendedorValidator::validate($vendedor->toArray());
    }


    public function testVendedorTelefoneCaracter()
    {
    	$this->expectException(\App\Validator\ValidationException::class);
    		$vendedor = factory(\App\Models\Vendedor::class)->make();
    	$vendedor->telefone="telefone";

    	\App\Validator\VendedorValidator::validate($vendedor->toArray());
    }

    public function testVendedorCorreto()
    {
    $vendedor = factory(\App\Models\Vendedor::class)->make();
    \App\Validator\VendedorValidator::validate($vendedor->toArray());

    $this->assertTrue(true);

    }
}
