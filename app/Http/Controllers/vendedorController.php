<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vendedor;

class vendedorController extends Controller
{
    //Ter acesso ao banco de dados
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vend = Vendedor::all();
        return view('adm.vendedores.index', compact('vend'));
    }

    public function add()
    {
        return view('adm.vendedores.add-vend');
    }


     public function salvar(request $request)
    {
        try{
            \App\Validator\VendedorValidator::validate($request->all());
            $dados = $request->all();
        /*
        if ($req->hasfile("imagem")) {
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/produtos/";
            $ex = $imagem->guessClientExtension();
            $nomeImg = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImg);
            $dados['imagem'] = $dir."/".$nomeImg;
            
        }*/

            Vendedor::create($dados);
            return redirect()->route('adm.vendedores.index');

    }catch (\App\Validator\ValidationException $exception ) {
        return view('adm.vendedores.add-vend')->withErrors($exception->getValidator());
    }
}

    public function editar($id)
    {
        $registro = Vendedor::find($id);
        return view('adm.vendedores.editar-vend', compact('registro'));
    }



     public function atualizar(request $req, $id)
    {
        $dados = $req->all();
        /*
        if ($req->hasfile("imagem")) {
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/produtos/";
            $ex = $imagem->guessClientExtension();
            $nomeImg = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImg);
            $dados['imagem'] = $dir."/".$nomeImg;
            
        }*/

        Vendedor::find($id)->update($dados);
        return redirect()->route('adm.vendedores.index');

    }

     public function deletar($id)
    {
        Vendedor::find($id)->delete();
        return redirect()->route('adm.vendedores.index');
    }

}
