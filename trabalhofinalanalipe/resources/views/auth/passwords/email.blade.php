@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="title">Esqueci minha senha</h2>
    <form method="POST" action="{{ route('password.email') }}" class="form">
        @csrf
        <div class="form-group">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-input" required>
        </div>
        <button type="submit" class="btn">Enviar link de redefinição</button>
    </form>
</div>
@endsection