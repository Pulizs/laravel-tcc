@extends('layouts.app-master') @section('content')
<div class="bg-light p-4 rounded">
	<h1>Disciplina</h1>
	<div class="lead">Dados da disciplina</div>
	<div class="mt-2">@include('layouts.partials.messages')</div>

	<div class="container mt-4">
		<form method="POST" action="">
			<div class="mb-3">
				<label for="professor_id" class="form-label">Professor</label> <select
					name=professor_id class="form-select">
					<option>Selecione</option> 
					@foreach($professores as $professor)
						<option value={{$professor->id}}>{{$professor->nome}}</option>
					@endforeach
				</select> 
				@if ($errors->has('professor_id'))
					<span class="text-danger text-left">{{$errors->first('professor_id') }}</span>
				@endif
			</div>
			@csrf
			<div class="mb-3">
				<label for="nome" class="form-label">Nome</label> <input
					value="{{ old('nome') }}" type="text" class="form-control"
					name="nome" placeholder="Nome" required> 
					@if ($errors->has('nome'))
						<span class="text-danger text-left">{{ $errors->first('nome') }}</span>
					@endif
			</div>
			<div class="mb-3">
				<label for="curso" class="form-label">Curso</label> <input
					value="{{ old('curso') }}" type="text" class="form-control"
					name="curso" placeholder="Curso" required>
					 @if ($errors->has('curso')) 
					 <span class="text-danger text-left">{{$errors->first('curso') }}</span> 
					 @endif
			</div>
			<div class="mb-3">
				<label for="sigla" class="form-label">Sigla</label> <input
					value="{{ old('sigla') }}" type="text" class="form-control"
					name="sigla" placeholder="Sigla" required> 
					@if ($errors->has('sigla')) 
						<span class="text-danger text-left">{{$errors->first('sigla') }}</span> 
					@endif
			</div>
			<div class="mb-3">
				<label for="cargaHoraria" class="form-label">Carga Horária</label> <input
					value="{{ old('cargaHoraria') }}" type="number"
					class="form-control" name="cargaHoraria" placeholder="CargaHoraria"
					required> 
					@if ($errors->has('cargaHoraria')) 
					<span class="text-danger text-left">{{ $errors->first('cargaHoraria') }}</span>
					@endif
			</div>

			<button type="submit" class="btn btn-success">Salvar</button>
			<a href="{{ route('disciplinas.index') }}" class="btn btn-danger">Cancelar</a>
		</form>
	</div>

</div>
@endsection

