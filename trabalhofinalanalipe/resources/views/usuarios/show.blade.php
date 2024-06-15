@extends('layouts.app-master')
 
@section('content')
	<div class="bg-light p-4 rounded">
    	<h1>Dados do usuario</h1>
    	<div class="lead">
           
    	</div>
       
    	<div class="container mt-4">
        	<div>
            	Nome: {{ $usuario->nome }}
        	</div>
        	<div>
            	Email: {{ $usuario->email }}
        	</div>
        	<div>
            	Role: {{ $usuario->role }}
        	</div>
        		<div>
            	Logradouro: {{ $usuario->endereco->logradouro }}
        	</div>
        	<div>
            	CEP: {{ $usuario->endereco->cep }}
        	</div>
        	<div>
            	Cidade: {{ $usuario->endereco->cidade }}
        	</div>
        	<div>
            	Numero: {{ $usuario->endereco->numero }}
        	</div>
        	<div>
            	Complemento: {{ $usuario->endereco->complemento }}
        	</div>     	
    	</div>
 
	</div>
	<div class="mt-4">
    	<a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Voltar</a>
	</div>
@endsection

