@extends('layouts.app-master')
@section('content')
<div class="bg-light p-4 rounded">
<h1>Disciplinas</h1>
<div class="lead">
Gerenciamento de disciplinas
<br/>
	
<a href="{{ route('disciplinas.create') }}"
	class="btn btn-primary btn-sm float-left">
	Criar novo
</a>
	

</div>
<div class="mt-2">
@include('layouts.partials.messages')
</div>
	<table class="table table-striped">
<thead>
<tr>
<th scope="col" width="1%">ID</th>
<th scope="col">Nome</th>
<th scope="col" width="15%">Curso</th>
<th scope="col" width="15%">Sigla</th>
<th scope="col" width="15%">Carga Horária</th>
<th scope="col" width="15%">Nome do professor</th>
<th scope="col" width="10%" colspan="3">Ações</th>
</tr>
</thead>
<tbody>
@foreach($disciplinas as $disciplina)
<tr>
<th scope="row">{{ $disciplina->id }}</th>
<td>{{ $disciplina->nome }}</td>
<td>{{ $disciplina->curso }}</td>
<td>{{ $disciplina->sigla }}</td>
<td>{{ $disciplina->cargaHoraria }}</td>
<td>{{ isset($disciplina->professor->nome) ? $disciplina->professor->nome : ''}}</td>

<td><a href="{{ route('disciplinas.show', $disciplina->id) }}" class="btn btn-warning btn-sm">Ver</a></td>
<td><a href="{{ route('disciplinas.edit', $disciplina->id) }}" class="btn btn-info btn-sm">Editar</a></td>

<td>
						{!! Form::open(['method' => 'DELETE','route' => ['disciplinas.destroy', $disciplina->id],'style'=>'display:inline']) !!}
						{!! Form::submit('Remover', ['class' => 'btn btn-danger btn-sm']) !!}
						{!! Form::close() !!}
					</td>
</tr>
@endforeach
</tbody>
</table>



</div>
@endsection

