<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\ModelLoja;

class produtoTest extends TestCase
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

    public function testProdutoSemNome()
    {
    	$this->expectException(\App\Validator\ValidationException::class);
            $produto = factory(ModelLoja::class)->make();
    	$produto->nome = "";

    	\App\Validator\ProdutoValidator::validate($produto->toArray());


    }

    public function testProdutoSemClasse()
    {
        $this->expectException(\App\Validator\ValidationException::class);
            $produto = factory(ModelLoja::class)->make();
        $produto->classe = "";

        \App\Validator\ProdutoValidator::validate($produto->toArray());


    }

    public function testProdutoSemTamanho()
    {
        $this->expectException(\App\Validator\ValidationException::class);
            $produto = factory(ModelLoja::class)->make();
        $produto->tamanho = "";

        \App\Validator\ProdutoValidator::validate($produto->toArray());


    }

    public function testProdutoSemPreco()
    {
        $this->expectException(\App\Validator\ValidationException::class);
            $produto = factory(ModelLoja::class)->make();
        $produto->preco = "";

        \App\Validator\ProdutoValidator::validate($produto->toArray());


    }

    
    public function testProdutoCorreto()
    {
        $produto = factory(ModelLoja::class)->make();
        \App\Validator\ProdutoValidator::validate($produto->toArray());

        $this->assertTrue(true);

    }
    


    
}
