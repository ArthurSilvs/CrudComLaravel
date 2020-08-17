<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loja', function (Blueprint $table) {
            $table->increments('id');
            /*Relaciona a tabela com a outra, mostra em uma os usuarios cadastrados 
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('vendedors')->onDelete('cascade')->onUpdate('cascade');
            //Se apagar ou atualizar na tabela users, acontece a msm coisa na tabela loja*/
            $table->string('imagem');
            $table->string('classe');
            $table->string('nome');
            $table->string('tamanho');
            $table->float('preco');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loja');
    }
}
