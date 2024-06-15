
<!DOCTYPE html>
<html>
<head>
<title>IFPR</title>
</head>
<body>
	<h1>{{ $emailData['title'] }}</h1>
	
	<div class="row row-cols-1 row-cols-md-2 g-4">
		<div class="col">
			<div class="card">
			
				@foreach ( $emailData['disciplinas'] as $disciplina )
				
					<div class="card-body">
						O nome de sua disciplina: {{ $disciplina->nome}}
					<br /> 	
						Curso: {{ $disciplina->curso }}
					<br /> 
						Sigla: {{ $disciplina->sigla}}
					<br /> 
						Carga horária: {{ $disciplina->cargaHoraria}} 
					<br />
					
						<br /> 
						<br />

					</div>
			</div>
		</div>
	</div>

	@endforeach
	<p>Obrigada desde já</p>
</body>
</html>