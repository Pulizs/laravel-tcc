@extends('layouts.app-master')
@section('content')
<div class="bg-light p-4 rounded">
<h1>Lojas</h1>
<div class="lead">
Dados do lotacao
</div>
<div class="mt-2">
@include('layouts.partials.messages')
</div>
	<div class="container mt-4">
<form method="POST" action="">
@csrf
<div class="mb-3">
<label for="nome do campus" class="form-label">nome do campus</label>
<input value="{{ old('nome do campus') }}"
type="text"
class="form-control"
name="nome do campus"
placeholder="nome do campus" required>
@if ($errors->has('nome do campus'))
<span class="text-danger text-left">{{ $errors->first('nome do campus') }}</span>
@endif
</div>
<div class="mb-3">
<label for="departamento" class="form-label">Departamento</label>
<input value="{{ old('departamento') }}"
type="number"
class="form-control"
name="departamento"
placeholder="departamento" required>
@if ($errors->has('departamento'))
<span class="text-danger text-left">{{ $errors->first('Departamento') }}</span>
@endif
</div>
<div class="mb-3">
<label for="areaAtuacao" class="form-label">areaAtuacao</label>
<input value="{{ old('areaAtuacaos's) }}"
type="number"
class="form-conrol"
name="quantidade"
placeholder="areaAtuacao" required>
@if ($errors->has('areaAtuacao'))
<span class="text-danger text-left">{{ $errors->first('areaAtuacao') }}</span>
@endif
</div>
<button type="submit" class="btn btn-success">Salvar</button>
<a href="{{ route('lotacaoes.index') }}" class="btn btn-danger">Cancelar</a>
</form>
</div>
	
</div>
@endsection

