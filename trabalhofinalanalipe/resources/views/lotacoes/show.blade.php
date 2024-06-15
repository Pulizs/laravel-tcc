@extends('layouts.app-master')
 
@section('content')
	<div class="bg-light p-4 rounded">
    	<h1>Dados da lotacao</h1>
    	<div class="lead">
           
    	</div>
       
    	<div class="container mt-4">
        	<div>
            	nomeCampus: {{ $lotacao->nomeCampus }}
        	</div>
        	<div>
            	Cnpj: {{ $lotacao->departamento }}
        	</div>
        	<div>
            	Quantidades de atendentes: {{ $professor->areaAtuacao }}
        	</div>
        	
    	</div>
 
	</div>
	<div class="mt-4">
    	<a href="{{ route('professores.index') }}" class="btn btn-secondary">Voltar</a>
	</div>
@endsection

