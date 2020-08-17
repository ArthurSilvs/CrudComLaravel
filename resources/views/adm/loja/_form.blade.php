<!--@if(isset($errors) && count($errors)>0)
	<div class="alert alert-danger">
		@foreach( $errors->all() as $error)
			<p>{{$error}}</p>
		@endforeach
	</error>

@endif-->

@csrf
<div class="file-field input-field">
	<div class="btn red">
		<span>Imagem</span>
		<input type="file" name="imagem">
	</div>

	<div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($p->imagem))
<div class="input-field">
	<img width="150" src="{{asset($registro-->imagem) ? $registro->imagem : ''}}">
</div>
</tr>
@endif
@error('imagem')
	<span class="alert alert-danger" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror

<div class="input-field">
	<input type="text" name="nome" id="nome" value="{{isset($registro->nome) ? $registro->nome : ''}} {{old('nome')}}">
	<label>Nome</label>
	<tr></tr>
	@error('nome')
		<span class="alert alert-danger" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>


<div class="input-field">
	<input type="text" name="classe" value="{{isset($registro->classe) ? $registro->classe : ''}} {{old('classe')}}">
	<label>Classe</label>
	@error('classe')
		<span class="alert alert-danger" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="input-field">
	<input type="text" name="tamanho" value="{{isset($registro->tamanho) ? $registro->tamanho : ''}} {{old('tamanho')}}">
	<label>Tamanho</label>
	@error('tamanho')
		<span class="alert alert-danger" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="input-field">
	<input type="text" name="preco" value="{{isset($registro->preco) ? $registro->preco : ''}} {{old('preco')}}" >
	<label>Preço</label>
	@error('preco')
		<span class="alert alert-danger" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>
