<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$dados=[
    	        'name'=>"Arthur",
    	        'email'=>"arthursilvajsjskd@gmail.com",
    	        'password'=>bcrypt("carros123"),
    	        
    	];
    	if(User::where('email', '=',$dados['email'])->count()){
    		$vend = User::where('email', '=',$dados['email'])->first();
    		$vend->update($dados);
    		echo "Usuário atualizado";
    	}else{
    		User::create($dados);
    		echo "Usuário criado";
    	}
    }
}
