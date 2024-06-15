@extends('layouts.app-master')
 
@section('content')
	<div class="bg-light p-4 rounded">
    	<h1>Alterar Professor</h1>
    	<div class="lead">
           
    	</div>
       
    	<div class="container mt-4">
        	<form method="post" action="{{ route('professores.update', $professor->id) }}">
            	@method('patch')
            	@csrf
            	<div class="mb-3">
                	<label for="nome" class="form-label">Nome</label>
                	<input value="{{ $professor->nome }}"
                    	type="text"
                    	class="form-control"
                    	name="nome"
                    	placeholder="Nome" required>
 
                	@if ($errors->has('nome'))
                    	<span class="text-danger text-left">{{ $errors->first('name') }}</span>
                	@endif
            	</div>
            	<div class="mb-3">
                	<label for="email" class="form-label">Email</label>
                	<input value="{{ $professor->email }}"
                    	type="email"
                    	class="form-control"
                    	name="email"
                    	placeholder="Email" required>
                	@if ($errors->has('email'))
                    	<span class="text-danger text-left">{{ $errors->first('email') }}</span>
                	@endif
            	</div>
            	<div class="mb-3">
                	<label for="dataNascimento" class="form-label">Data de Nascimento</label>
                	<input value="{{ $professor->dataNascimento }}"
                    	type="date"
                    	class="form-control"
                    	name="dataNascimento"
                    	placeholder="DataNascimento" required>
                	@if ($errors->has('dataNascimento'))
                    	<span class="text-danger text-left">{{ $errors->first('dataNascimento') }}</span>
                	@endif
            	</div>
            	<div class="mb-3">
                	<label for="cpf" class="form-label">Cpf</label>
                	<input value="{{ $professor->cpf }}"
                    	type="text"
                    	class="form-control"
                    	name="cpf"
                    	placeholder="Cpf" required>
                	@if ($errors->has('cpf'))
                    	<span class="text-danger text-left">{{ $errors->first('cpf') }}</span>
                	@endif
            	</div>
            	            	<div class="mb-3">
                	<label for="nomeCampus" class="form-label">Nome do Campus</label>
                	<input value="{{ $professor->lotacao->nomeCampus }}"
                    	type="text"
                    	class="form-control"
                    	name="nomeCampus"
                    	placeholder="NomeCampus" required>
                	@if ($errors->has('nomeCampus'))
                    	<span class="text-danger text-left">{{ $errors->first('nomeCampus') }}</span>
                	@endif
            	</div>
            	            	<div class="mb-3">
                	<label for="departamento" class="form-label">Departamento</label>
                	<input value="{{ $professor->lotacao->departamento }}"
                    	type="text"
                    	class="form-control"
                    	name="departamento"
                    	placeholder="Departamento" required>
                	@if ($errors->has('departamento'))
                    	<span class="text-danger text-left">{{ $errors->first('departamento') }}</span>
                	@endif
            	</div>
            	            	<div class="mb-3">
                	<label for="areaAtuacao" class="form-label">Área de Atuação</label>
                	<input value="{{ $professor->lotacao->areaAtuacao }}"
                    	type="text"
                    	class="form-control"
                    	name="areaAtuacao"
                    	placeholder="AreaAtuacao" required>
                	@if ($errors->has('areaAtuacao'))
                    	<span class="text-danger text-left">{{ $errors->first('areaAtuacao') }}</span>
                	@endif
            	</div>
           	
            	<button type="submit" class="btn btn-primary">Salvar</button>
            	<a href="{{ route('usuarios.index') }}" class="btn btn-default">Cancelar</button>
        	</form>
    	</div>
 
	</div>
@endsection


