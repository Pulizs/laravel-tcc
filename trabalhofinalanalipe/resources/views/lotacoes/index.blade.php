@extends('layouts.app-master') @section('content')

<div class="bg-light p-4 rounded">
	<h1>Professores</h1>
	<div class="lead">
		Gerenciamento de Professores 
		<br>
		<a href="{{route('professores.create')}}"
			class="btn btn-primary btn-sm float-left">Criar novo</a>
	</div>
	<div class="mt-2">@include('layouts.partials.messages')</div>



	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col" width="1%">ID</th>
				<th scope="col">nomeCampus</th>
				<th scope="col" width="15%">departamento</th>
				<th scope="col" width="15%">areaAtuacao</th>
				<th scope="col" width="1%" colspan="3">Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($professores as $professor)
			<tr>
				<th scope="row">{{ $professor->id }}</th>
				<td>{{ $loja->nomeCampus }}</td>
				<td>{{ $loja->departamento }}</td>
				<td>{{ $loja->areaAtuacao }}</td>
				<td><a href="{{ route('professores.show', $professor->id) }}" class="btn btn-warning btn-sm">Ver</a></td>
				<td><a href="{{ route('professores.edit', $professor->id) }}" class="btn btn-info btn-sm">Editar</a></td>

				<td>
					{!! Form::open(['method' => 'DELETE','route' => ['professores.destroy', $professor->id],'style'=>'display:inline']) !!}
					{!! Form::submit('Remover', ['class' => 'btn btn-danger btn-sm']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="d-flex">{!! $professores->links() !!}</div>
</div>


@endsection
