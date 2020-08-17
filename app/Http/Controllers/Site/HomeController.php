<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelLoja;

class HomeController extends Controller
{
    public function index(){
    	$produtos = ModelLoja::all();
    	return view('home', compact('produtos'));
    }
}
