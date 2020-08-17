@extends('templates.header-vend')
@extends('templates.footer')

@section('titulo', 'Editar Vendedor')
<!-- Nome definido no yield do arquivo que é chamado pelo extends -->
@section('conteudo')
	
	<div class="container">
		<h3 class="center">Editar Vendedor</h3>
	<div class="row">
		<form class="" action="{{route('adm.vendedores.atualizar-vend', $registro->id)}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }} 
			<input type="hidden" name="_method" value="put">
			@include('adm.vendedores._form-vend')
			
			<button class="btn blue">Atualizar</button>

		</form>
	</div>
		
	
@endsection