@extends('templates.header-vend')
@extends('templates.footer')

@section('titulo', 'Adicionar Vendedor')
<!-- Nome definido no yield do arquivo que é chamado pelo extends -->
@section('conteudo')
	
	<div class="container">
		<h3 class="center">Adicionar Vendedor</h3>
	<div class="row">
		<form class="" action="{{route('adm.vendedores.salvar-vend')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }} 
			@include('adm.vendedores._form-vend')

			<button class="btn blue">Salvar</button>
		
		</form>
	</div>
		
	
@endsection