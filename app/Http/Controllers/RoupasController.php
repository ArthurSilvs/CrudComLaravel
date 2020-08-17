<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ModelLoja;

class RoupasController extends Controller
{
    //Ter acesso ao banco de dados
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = ModelLoja::all();
        return view('adm.loja.index', compact('produtos'));
    }

    public function add()
    {
        return view('adm.loja.add');
    }


     public function salvar(request $request)
    {
        try{
            \App\Validator\ProdutoValidator::validate($request->all());
            $dados = $request->all();

            if ($request->hasfile("imagem")) {
                $imagem = $request->file('imagem');
                $num = rand(1111, 9999);
                $dir = "img/produtos/";
                $ex = $imagem->guessClientExtension();
                $nomeImg = "imagem_".$num.".".$ex;
                $imagem->move($dir, $nomeImg);
                $dados['imagem'] = $dir."/".$nomeImg;    
                
            }
                ModelLoja::create($dados);
                return redirect()->route('adm.loja');       
    }catch (\App\Validator\ValidationException $exception ) {
        return view('adm.loja.add')->withErrors($exception->getValidator());
        
       


    }

}



    public function editar($id)
    {
        $registro = ModelLoja::find($id);
        return view('adm.loja.editar', compact('registro'));
    }



     public function atualizar(request $req, $id)
    {
        $dados = $req->all();
        if ($req->hasfile("imagem")) {
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/produtos/";
            $ex = $imagem->guessClientExtension();
            $nomeImg = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImg);
            $dados['imagem'] = $dir."/".$nomeImg;
            
        }

        ModelLoja::find($id)->update($dados);
        return redirect()->route('adm.loja');

    }

     public function deletar($id)
    {
        ModelLoja::find($id)->delete();
        return redirect()->route('adm.loja');
    }

}
