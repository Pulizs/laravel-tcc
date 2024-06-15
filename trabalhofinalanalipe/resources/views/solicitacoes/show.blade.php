@extends('layouts.app-master')
@section('content')
<div class="bg-light p-4 rounded">
<h1>Dados da solicitação</h1>
<div class="lead">
</div>
<div class="container mt-4">
<div>
Título: {{ $solicitacao->titulo }}
</div>
<div>
Texto: {{ $solicitacao->texto }}
</div>
<div>
Status: {{ $solicitacao->status }}
</div>
<div>
Data: {{ date('d/m/Y', strtotime($solicitacao->data)) }}
</div>

</div>
</div>
<div class="mt-4">
<a href="{{ route('solicitacoes.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection


