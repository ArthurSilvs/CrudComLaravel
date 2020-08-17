@extends('templates.header-vend')
@extends('templates.footer')
@section('titulo', 'Tuzin Store')

<!-- Nome definido no yield do arquivo que é chamado pelo extends -->
@section('conteudo')
	<div class="container">
		<h3 class="center">Vendedores</h3>
		<div class="row">
			<table>
				<thead>
					<tr>
					  
					  <th>ID</th>
					  <th>Nome</th>
					  <th>E-mail</th>
					  <th>Senha</th>
					  <th>Telefone</th>
					  <th>Ação</th>
					</tr>
				</thead>
			<tbody>
				@foreach($vend as $v)
					<tr>
						<td>{{$v-> id}}</td>
						<td>{{$v-> nome}}</td>
						<td>{{$v-> email}}</td>
						<td>{{$v-> senha}}</td>
						<td>{{$v-> telefone}}</td>
						<td>
							<a class="btn deep-orange" href="{{route('adm.vendedores.editar-vend', $v->id)}}">Editar</a>
							<a class="btn red" href="{{route('adm.vendedores.deletar-vend', $v->id)}}">Deletar</a>
						</td>
					</tr>
				@endforeach					
			</tbody>
		</table>
	</div>
</div>

	
@endsection