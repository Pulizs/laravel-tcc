@extends('layouts.app-master')
 
@section('content')
	<div class="bg-light p-4 rounded">
    	<h1>Alterar usuario</h1>
    	<div class="lead">
           
    	</div>
       
    	<div class="container mt-4">
        	<form method="post" action="{{ route('usuarios.update', $usuario->id) }}">
            	@method('patch')
            	@csrf
            	<div class="mb-3">
                	<label for="nome" class="form-label">Nome</label>
                	<input value="{{ $usuario->nome }}"
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
                	<input value="{{ $usuario->email }}"
                    	type="email"
                    	class="form-control"
                    	name="email"
                    	placeholder="Email" required>
                	@if ($errors->has('email'))
                    	<span class="text-danger text-left">{{ $errors->first('email') }}</span>
                	@endif
            	</div>
            	<div class="mb-3">
                	<label for="role" class="form-label">Role</label>
                	<input value="{{ $usuario->role }}"
                    	type="text"
                    	class="form-control"
                    	name="role"
                    	placeholder="Role" required>
                	@if ($errors->has('role'))
                    	<span class="text-danger text-left">{{ $errors->first('role') }}</span>
                	@endif
            	</div>
            	<div class="mb-3">
                	<label for="logradouro" class="form-label">Logradouro</label>
                	<input value="{{ $usuario->endereco->logradouro }}"
                    	type="text"
                    	class="form-control"
                    	name="logradouro"
                    	placeholder="Logradouro" required>
                	@if ($errors->has('logradouro'))
                    	<span class="text-danger text-left">{{ $errors->first('logradouro') }}</span>
                	@endif
            	</div>
            	            	<div class="mb-3">
                	<label for="cep" class="form-label">Cep</label>
                	<input value="{{ $usuario->endereco->cep }}"
                    	type="text"
                    	class="form-control"
                    	name="cep"
                    	placeholder="Cep" required>
                	@if ($errors->has('cep'))
                    	<span class="text-danger text-left">{{ $errors->first('cep') }}</span>
                	@endif
            	</div>
            	            	<div class="mb-3">
                	<label for="cidade" class="form-label">Cidade</label>
                	<input value="{{ $usuario->endereco->cidade }}"
                    	type="text"
                    	class="form-control"
                    	name="cidade"
                    	placeholder="Cidade" required>
                	@if ($errors->has('cidade'))
                    	<span class="text-danger text-left">{{ $errors->first('cidade') }}</span>
                	@endif
            	</div>
            	            	<div class="mb-3">
                	<label for="numero" class="form-label">Numero</label>
                	<input value="{{ $usuario->endereco->numero }}"
                    	type="text"
                    	class="form-control"
                    	name="numero"
                    	placeholder="Numero" required>
                	@if ($errors->has('numero'))
                    	<span class="text-danger text-left">{{ $errors->first('numero') }}</span>
                	@endif
            	</div>
            	            	<div class="mb-3">
                	<label for="complemento" class="form-label">Complemento</label>
                	<input value="{{ $usuario->endereco->complemento }}"
                    	type="text"
                    	class="form-control"
                    	name="complemento"
                    	placeholder="Complemento" required>
                	@if ($errors->has('complemento'))
                    	<span class="text-danger text-left">{{ $errors->first('complemento') }}</span>
                	@endif
            	</div>
           	
            	<button type="submit" class="btn btn-primary">Salvar</button>
            	<a href="{{ route('usuarios.index') }}" class="btn btn-default">Cancelar</button>
        	</form>
    	</div>
 
	</div>
@endsection


