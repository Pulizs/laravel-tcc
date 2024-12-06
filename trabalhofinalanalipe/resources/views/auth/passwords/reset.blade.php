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
    <h2>Redefinir senha</h2> <br>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ $email }}">

        <div class="form-group form-floating mb-3 w-25 mx-auto">
        <input type="text" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
        	<label for="password">Nova Senha</label>
        </div>
       
        <div class="form-group form-floating mb-3 w-25 mx-auto">
        <input type="text" class="form-control" name="password_confirmation" value="{{ old('password') }}" placeholder="password_confirmation" required="required">
        	<label for="password_confirmation">Confirme sua senha</label>
        </div>

        <button type="submit" class="btn">Redefinir senha</button>
    </form>
</div>
</center>

@endsection