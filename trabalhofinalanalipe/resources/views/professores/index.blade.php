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
				<th scope="col">Nome</th>
				<th scope="col">Email</th>
				<th scope="col" width="15%">Data Nascimento</th>
				<th scope="col" width="15%">Cpf</th>
				<th scope="col" width="15%">Lotação</th>
				<th scope="col" width="30%" colspan="7">Ações</th>
			</tr>
		</thead>
		
		<tbody>
			@foreach($professores as $professor)
			<tr>
				<th scope="row">{{ $professor->id }}</th>
				<td>{{ $professor->nome }}</td>
				<td>{{ $professor->email }}</td>
				<td>{{ date('d/m/Y', strtotime($professor->dataNascimento)) }}</td>
				<td>{{ $professor->cpf }}</td>
				<td>{{ $professor->lotacao->nomeCampus }}</td>
				<td><a href="{{ route('professores.show', $professor->id) }}" class="btn btn-warning btn-sm">Ver</a></td>
				<td><a href="{{ route('professores.edit', $professor->id) }}" class="btn btn-info btn-sm">Editar</a></td>
				<td><a href="{{ route('disciplinas.create', $professor->id) }}" class="btn btn-info btn-sm">Criar Disciplinas</a></td>
				<td><a href="{{ route('email.index', $professor->id) }}" class="btn btn-secondary btn-sm float-left">Notificar</a></td>
				<td><a href="{{route('pdf.index',['download'=>'pdf', 'professor_id'=>$professor->id])}}" class="btn btn-secondary btn-sm float-left">Relatório</a><td>
		
			

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
