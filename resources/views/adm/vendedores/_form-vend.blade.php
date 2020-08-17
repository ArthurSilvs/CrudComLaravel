<!--@if(isset($errors) && count($errors)>0)
	<div class="alert alert-danger">
		@foreach( $errors->all() as $error)
			<p>{{$error}}</p>
		@endforeach
	</div>
@endif-->

@csrf
<div class="input-field">
	<input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
	<label>Nome</label>
	@error('nome')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>


<div class="input-field">
	<input type="email" name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
	<label>E-mail</label>
	@error('email')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>


<div class="input-field">
	<input type="text" name="senha" value="{{isset($registro->senha) ? $registro->senha : ''}}">
	<label>Senha</label>
	@error('senha')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="input-field">
	<input type="text" name="telefone" value="{{isset($registro->telefone) ? $registro->telefone : ''}}">
	<label>Telefone</label>
	@error('telefone')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

