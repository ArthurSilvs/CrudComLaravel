<!-- Primeiro vem a pasta depois o arquivo -->
@extends('templates.template')

<!-- Nome definido no yield do arquivo que é chamado pelo extends -->
@section('content')
	<h1 class="text-center">qualquer coisa</h1> <hr>

	<div class="text-center" mt-3 mb-4>
		<a href="">
			<button class='btn btn-success'>Cadastrar</button>
		</a>
	</div>

	<div class="col-8 m-auto">
		<table class="table table-dark text-center">
			  <thead>
			    <tr>
			      	<th scope="col">Id</th>
			      	<th scope="col">Vendedor</th>
			      	<th scope="col">Categoria</th>
			      	<th scope="col">Produto</th>
			      	<th scope="col">Tamanho</th>
			      	<th scope="col">Preço</th>
			      	<th scope="col">Ação</th>
			    </tr>
			  </thead>
			  <tbody>

			  	@foreach($loja as $lojas)
			  		@php
			  			$user=$lojas->find($lojas->id)->relUsers;
			  		@endphp
			  	
			  	<tr>
			    	<th scope="row">{{$lojas->id}}</th>
			      	<td>{{$user->name}}</td>
			      	<td>{{$lojas->classe}}</td>
			     	<td>{{$lojas->nome}}</td>
			      	<td>{{$lojas->tamanho}}</td>
			      	<td>{{$lojas->preco}}</td>
			      	<td>
			      			<a href="">
			      				<button class='btn btn-dark'>Visualizar</button>
			      			</a>
			      			<a href="">
			      				<button class='btn btn-dark'>Editar</button>
			      			</a>
			      			<a href="">
			      				<button class='btn btn-dark'>Excluir</button>
			      			</a>
			      	</td>
			  	</tr>
			  	@endforeach
			  </tbody>
		</table>
	</div>>
@endsection