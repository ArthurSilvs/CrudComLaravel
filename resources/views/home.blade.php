@extends('home.header-home')
@extends('home.footer-home')
@section('titulo', 'Tuzin Store')

<!-- Nome definido no yield do arquivo que é chamado pelo extends -->
@section('conteudo')
	<div class="container">
		<h3 class="center">Bem vindo/a a Tuzin Store</h3>
		<h5 class="center">Aqui você encontra de tudo!</h5>
		  <div class="row">
		  	@foreach($produtos as $produto)
			    <div class="col s12 m4">
			      <div class="card">
			        <div class="card-image">
			          <img width="120" src="{{$produto->imagem}}">
	
			        </div>
			        <div class="card-content">
			          <h4>{{$produto->nome}}</h4>
			          <p>{{$produto->tamanho}}</p>
			        </div>
			        <div class="card-action">
			          <a href="#">Ver mais</a>
			        </div>
			      </div>
			    </div>
			@endforeach
  </div>


</div>

	
@endsection