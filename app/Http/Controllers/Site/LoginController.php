<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function entrar(Request $req){

    	if(Auth::attempt(['email'=>$req['email'], 'password'=>$req['password'] ])){
            //$nome= (Auth::user()->'nome');
    		return redirect()->route('adm.loja');

    	}else{
        
    	return redirect()->back()->withErrors(['E-mail e/ou senha incorretos!']);
        }
    }


    public function sair(){
    	Auth::logout();
    	return redirect()->route('site.home');
    }
}

