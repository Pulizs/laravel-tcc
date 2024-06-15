@extends('layouts.app-master')
 
@section('content')
	<div class="bg-light p-4 rounded">
    	<h1>Dados do Professor</h1>
    	<div class="lead">
           
    	</div>
       
    	<div class="container mt-4">
        	<div>
            	Nome: {{ $professor->nome }}
        	</div>
        	<div>
            	Email: {{ $professor->email }}
        	</div>
        	<div>
            	Data de Nascimento: {{ $professor->dataNascimento }}
        	</div>
        		<div>
            	Cpf: {{ $professor->cpf }}
        	</div>
        	<div>
            	Nome do Campus: {{ $professor->lotacao->nomeCampus }}
        	</div>
        	<div>
            	Cidade: {{ $professor->lotacao->departamento }}
        	</div>
        	<div>
            	Numero: {{ $professor->lotacao->areaAtuacao }}
        	</div>   	
    	</div>
 
	</div>
	<div class="mt-4">
    	<a href="{{ route('professores.index') }}" class="btn btn-secondary">Voltar</a>
	</div>
@endsection

