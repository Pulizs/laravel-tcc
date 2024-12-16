@extends('layouts.app')

@section('content')

<style>


.btn {
    background-color: #b879bd; /* Cor de fundo do botão */
    color: white; /* Cor do texto */
    border: none; /* Remove a borda */
    padding: 10px 20px; /* Espaçamento interno */
    font-size: 16px; /* Tamanho da fonte */
    border-radius: 5px; /* Bordas arredondadas */
    cursor: pointer; /* Aparece um cursor de mão */
}
    
</style>


<center>

<div class="container">
    <h2 class="title">Esqueci minha senha</h2>
    <form method="POST" action="{{ route('password.email') }}" class="form"><br>
        @csrf
        <div class="form-group form-floating mb-3 w-25 mx-auto">
        	<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required="required" autofocus>
        	<label for="floatingName">E-mail</label>
        	@if ($errors->has('email'))
            	<span class="text-danger text-left">{{ $errors->first('email') }}</span>
        	@endif
    	</div>
        <button type="submit" class="btn">Enviar link de redefinição</button>
    </form>
</div>
</center>
@endsection


 
    	
       
