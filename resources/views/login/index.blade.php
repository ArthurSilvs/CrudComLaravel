@extends('home.header-home')
@extends('home.footer-home')

@section('titulo', 'Login')
<!-- Nome definido no yield do arquivo que é chamado pelo extends -->
@section('conteudo')
	
	<div class="container">
		<h3 class="center">Logar no Sistema</h3>
	<div class="row">
		<form class="" action="{{route('site.login.entrar')}}" method="post">
			{{ csrf_field() }} 
			
			@if ($errors->all())
				@foreach($errors->all() as $error)
					<div>
						{{$error}}
					</div>
				@endforeach
			@endif

			<div class="input-field">
				<input type="email" name="email">
				<label>E-mail</label>
			</div>

			<div class="input-field">
				<input type="password" name="password">
				<label>Senha</label>
			</div>


			<button class="btn blue">Entrar</button>

		</form>
	</div>
</div>
		
	
@endsection