@extends('templates.header')
@extends('templates.footer')

@section('titulo', 'Adicionar Produto')
<!-- Nome definido no yield do arquivo que é chamado pelo extends -->
@section('conteudo')
	
	<div class="container">
		<h3 class="center">Adicionar Produto</h3>
	<div class="row">
		<form class="" action="{{route('adm.loja.salvar')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			@include('adm.loja._form')

			<button class="btn blue">Salvar</button>

		</form>
	</div>
		
	
@endsection