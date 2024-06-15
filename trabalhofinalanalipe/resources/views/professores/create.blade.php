@extends('layouts.app-master') @section('content')
<div class="bg-light p-4 rounded">
	<h1>Professores</h1>
	<div class="lead">Dados do Professores</div>
	<div class="mt-2">@include('layouts.partials.messages')</div>
	<div class="container mt-4">
		<form method="POST" action="">
			@csrf
			<div class="mb-3">
				<label for="nome" class="form-label">Nome</label> <input
					value="{{ old('nome') }}" type="text" class="form-control"
					name="nome" placeholder="Nome" required> 
					@if ($errors->has('nome'))
				<span class="text-danger text-left">{{ $errors->first('nome') }}</span>
					@endif
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email</label> <input
					value="{{ old('email') }}" type="email" class="form-control"
					name="email" placeholder="Email" required> 
					@if ($errors->has('email')) 
						<span class="text-danger text-left">{{ $errors->first('email') }}</span> 
					@endif
			</div>
			<div class="mb-3">
				<label for="dataNascimento" class="form-label">Data de Nascimento</label>
				<input value="{{ old('dataNascimento') }}" type="date"
					class="form-control" name="dataNascimento"
					placeholder="DataNascimento" required> 
					@if ($errors->has('dataNascimento')) 
						<span class="text-danger text-left">{{ $errors->first('dataNascimento') }}</span> 
					@endif
			</div>
			<div class="mb-3">
				<label for="cpf" class="form-label">Cpf</label> <input
					value="{{ old('cpf') }}" type="text" class="form-control"
					name="cpf" placeholder="Cpf" required> 
					@if ($errors->has('cpf')) 
						<span class="text-danger text-left">{{ $errors->first('cpf') }}</span>
					@endif
			</div>
			<div class="mb-3">
				<label for="nomeCampus" class="form-label">Nome do Campus</label> <input
					value="{{ old('nomeCampus') }}" type="text" class="form-control"
					name="nomeCampus" placeholder="NomeCampus" required> 
					@if ($errors->has('nomeCampus')) 
						<span class="text-danger text-left">{{ $errors->first('nomeCampus') }}</span> 
					@endif
			</div>
			<div class="mb-3">
				<label for="departamento" class="form-label">Departamento</label> <input
					value="{{ old('departamento') }}" type="text" class="form-control"
					name="departamento" placeholder="Departamento" required> 
					@if ($errors->has('departamento')) 
						<span class="text-danger text-left">{{ $errors->first('departamento') }}</span> 
					@endif
			</div>
			<div class="mb-3">
				<label for="areaAtuacao" class="form-label">Área de atuação</label>
				<input value="{{ old('areaAtuacao') }}" type="text"
					class="form-control" name="areaAtuacao" placeholder="AreaAtuacao"
					required> 
					@if ($errors->has('areaAtuacao')) 
						<span class="text-danger text-left">{{ $errors->first('areaAtuacao') }}</span>
					@endif
			</div>

			<button type="submit" class="btn btn-success">Salvar</button>
			<a href="{{ route('professores.index') }}" class="btn btn-danger">Cancelar</a>
		</form>
	</div>

</div>
@endsection

