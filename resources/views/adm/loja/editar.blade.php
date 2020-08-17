@extends('templates.header')
@extends('templates.footer')

@section('titulo', 'Editar Produto')
<!-- Nome definido no yield do arquivo que é chamado pelo extends -->
@section('conteudo')
	
	<div class="container">
		<h3 class="center">Editar Produto</h3>
	<div class="row">
		<form class="" action="{{route('adm.loja.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }} 
			<input type="hidden" name="_method" value="put">
			@include('adm.loja._form')
			<button class="btn blue">Atualizar</button>

		</form>
	</div>
		
	
@endsection