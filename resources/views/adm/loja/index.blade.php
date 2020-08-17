@extends('templates.header')
@extends('templates.footer')
@section('titulo', 'Tuzin Store')

<!-- Nome definido no yield do arquivo que é chamado pelo extends -->
@section('conteudo')
	<div class="container">
		<h3 class="center">Lista de Produtos</h3>
		<div class="row">
			<table class="table">
				<thead class="thead-dark">
					<tr>
					  <th>Imagem</th>
					  <th>ID</th>
					  <th>Classe</th>
					  <th>Nome</th>
					  <th>Tamanho</th>
					  <th>Preço</th>
					  <th>Ação</th>
					</tr>
				</thead>
			<tbody>
				@foreach($produtos as $p)
					<tr>
						<td class="text-center"><img width="100" src="{{asset($p->imagem)}}" alt="{{$p->nome}}"></td>
						<td class="text-center">{{$p-> id}}</td>
						<td class="text-center">{{$p-> classe}}</td>
						<td class="text-center">{{$p-> nome}}</td>
						<td class="text-center">{{$p-> tamanho}}</td>
						<td class="text-center">{{$p-> preco}}</td>	
						<td> 
							<a class="btn btn-primary" href="{{route('adm.loja.editar', $p->id)}}">Editar</a>
							<a class="btn btn-danger" href="{{route('adm.loja.deletar', $p->id)}}">Deletar</a>
						</td>
					</tr>
				@endforeach					
			</tbody>
		</table>
	</div>
</div>

	
@endsection