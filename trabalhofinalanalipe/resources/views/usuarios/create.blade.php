@extends('layouts.app-master')
@section('content')
<div class="bg-light p-4 rounded">
<h1>Usuarios</h1>
<div class="lead">
Dados do Usuario
</div>
<div class="mt-2">
@include('layouts.partials.messages')
</div>
	<div class="container mt-4">
<form method="POST" action="">
@csrf
<div class="mb-3">
<label for="nome" class="form-label">Nome</label>
<input value="{{ old('nome') }}"
type="text"
class="form-control"
name="nome"
placeholder="Nome" required>
@if ($errors->has('nome'))
<span class="text-danger text-left">{{ $errors->first('nome') }}</span>
@endif
</div>
<div class="mb-3">
<label for="email" class="form-label">Email</label>
<input value="{{ old('email') }}"
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
<input value="{{ old('role') }}"
type="text"
class="form-control"
name="role"
placeholder="Role" required>
@if ($errors->has('role'))
<span class="text-danger text-left">{{ $errors->first('role') }}</span>
@endif
</div>
<div class="mb-3">
<label for="password" class="form-label">Password</label>
<input value="{{ old('password') }}"
type="password"
class="form-control"
name="password"
placeholder="Password" required>
@if ($errors->has('password'))
<span class="text-danger text-left">{{ $errors->first('password') }}</span>
@endif
</div>
<div class="mb-3">
<label for="logradouro" class="form-label">Logradouro</label>
<input value="{{ old('logradouro') }}"
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
<input value="{{ old('cep') }}"
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
<input value="{{ old('cidade') }}"
type="text"
class="form-control"
name="cidade"
placeholder="Cidade" required>
@if ($errors->has('cidade'))
<span class="text-danger text-left">{{ $errors->first('cidade') }}</span>
@endif
</div>
<div class="mb-3">
<label for="numero" class="form-label">Número</label>
<input value="{{ old('numero') }}"
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
<input value="{{ old('complemento') }}"
type="text"
class="form-control"
name="complemento"
placeholder="Complemento" required>
@if ($errors->has('complemento'))
<span class="text-danger text-left">{{ $errors->first('complemento') }}</span>
@endif
</div>
<button type="submit" class="btn btn-success">Salvar</button>
<a href="{{ route('usuarios.index') }}" class="btn btn-danger">Cancelar</a>
</form>
</div>
	
</div>
@endsection

