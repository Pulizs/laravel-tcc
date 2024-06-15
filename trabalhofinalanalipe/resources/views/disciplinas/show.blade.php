@extends('layouts.app-master')
@section('content')
<div class="bg-light p-4 rounded">
<h1>Dados da Disciplinas</h1>
<div class="lead">
</div>
<div class="container mt-4">
<div>
Nome: {{ $disciplina->nome }}
</div>
<div>
Curso: {{ $disciplina->curso }}
</div>
<div>
Sigla: {{ $disciplina->sigla }}
</div>
<div>
Carga Horária {{ $disciplina->cargaHoraria }}
</div>

</div>
</div>
<div class="mt-4">
<a href="{{ route('disciplinas.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection


