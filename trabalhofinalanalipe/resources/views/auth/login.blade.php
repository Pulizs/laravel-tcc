<!-- @extends('layouts.auth-master') -->
@extends('layouts.app-master') @section('content')
 
<!-- @section('content')
<center>
	<form method="post" action="{{ route('login.perform') }}">
       
    	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    	<img class="mb-4" src="{!! url('assets/images/ifpr_vertical.svg') !!}" alt="" width="202" height="187">
       
    	<h1 class="h3 mb-3 fw-normal">Login</h1>
 
    	@include('layouts.partials.messages')
 
    	<div class="form-group form-floating mb-3 w-25 mx-auto">
        	<input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required="required" autofocus>
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
    	</div>
 
          	<div class="form-group form-floating mb-3 mx-auto">
        	<button class="btn btn-lg btn-primary w-25 mx-auto" type="submit">Login</button>
        	<br/><br/>
        	<a href="{{ route('home.index') }}" class="btn btn-lg btn-secondary w-25 mx-auto">Página Inicial</a>
          	</div>
       
    	@include('auth.partials.copy')
	</form>
	</center>
@endsection
 -->

 