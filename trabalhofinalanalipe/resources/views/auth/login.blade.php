@extends('layouts.app-master') @section('content')


<style>


.botao-esqc {
    gap: 10px;
    align-items: center;
}


.botao-esqc {
    color: #b879bd;
	border: none;  
	text-decoration: none;
	text-align: center;
	align-items: center;
}


.botao {
    background-color: #b879bd; 
    color: white; 
    border: none; 
    padding: 13px 145px;
    font-size: 18px;
    border-radius: 8px; 
    cursor: pointer; 
}


.botao:hover {
    background-color: #D0AAD1;
}


</style>
 
<center>
	<form method="post" action="{{ route('login.perform') }}">
       
    	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    	<img class="mb-4" src="{!! url('assets/images/logo_mathscience-sem_fundo.png') !!}" alt="" width="202" height="187">
       
    	<h1 class="h3 mb-3 fw-normal">Login</h1>
 
    	@include('layouts.partials.messages')
 
    	<div class="form-group form-floating mb-3 w-25 mx-auto">
        	<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required="required" autofocus>
        	<label for="floatingName">E-mail</label>
        	@if ($errors->has('email'))
            	<span class="text-danger text-left">{{ $errors->first('email') }}</span>
        	@endif
    	</div>
       
    	<div class="form-group form-floating mb-3 w-25 mx-auto">
        	<input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
        	<label for="floatingPassword">Password</label>
        	@if ($errors->has('password'))
            	<span class="text-danger text-left">{{ $errors->first('password') }}</span>
        	@endif
				<a href="{{route('password.request')}}" class="botao-esqc">Esqueci minha senha</a>
			
    	</div>
 
          	<div class="form-group form-floating mb-3 mx-auto">
        	<button class="botao" type="submit">Login</button>
        	<br/><br/>
        	<a href="{{ route('register.perform') }}" class="btn btn-lg btn-secondary w-25 mx-auto">Criar Conta</a>
          	</div>
       
    	@include('auth.partials.copy')
	</form>
	</center>
@endsection


 