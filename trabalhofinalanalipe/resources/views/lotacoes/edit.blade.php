@extends('layouts.app-master')
 
@section('content')
	<div class="bg-light p-4 rounded">
    	<h1>Alterar lotacaoes</h1>
    	<div class="lead">
           
    	</div>
      
    	<div class="container mt-4">
        	<form method="post" action="{{ route('lotacaoes.update', $lotacao->id) }}">
            	@method('patch')
            	@csrf
            	<div class="mb-3">
                	<label for="nomeCampus" class="form-label">nomeCampus</label>
                	<input value="{{ $loja->nomeCampus }}"
                    	type="text"
                    	class="form-control"
                    	name="nomeCampus"
                    	placeholder="nomeCampus" required>
 
                	@if ($errors->has('nomeCampus'))
                    	<span class="text-danger text-left">{{ $errors->first('name') }}</span>
                	@endif
            	</div>
            	<div class="mb-3">
                	<label for="departamento" class="form-label">departamento</label>
                	<input value="{{ $lotacao->departamento }}"
                    	type="number"
                    	class="form-control"
                    	name="departamento"
                    	placeholder="departamento" required>
                	@if ($errors->has('departamento'))
                    	<span class="text-danger text-left">{{ $errors->first('departamento') }}</span>
                	@endif
            	</div>
            	<div class="mb-3">
                	<label for="areaAtuacao" class="form-label">areaAtuacao</label>
                	<input value="{{ $lotacao->areaAtuacao }}"
                    	type="number"
                    	class="form-control"
                    	name="areaAtuacao"
                    	placeholder="areaAtuacao" required>
                	@if ($errors->has('areaAtuacao'))
                    	<span class="text-danger text-left">{{ $errors->first('areaAtuacao') }}</span>
                	@endif
            	</div>
          
            	
            	<button type="submit" class="btn btn-primary">Salvar</button>
            	<a href="{{ route('lotacaoes.index') }}" class="btn btn-default">Cancelar</button>
        	</form>
    	</div>
 
	</div>
@endsection


