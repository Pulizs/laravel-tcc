@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">

	<form method="post" action="{{ route('usuarios.update', $usuario->id) }}">
		@method('patch')
		@csrf
		<h2>Alterar Usuário</h2>
		<br>

		<center>
				<div class="col-md-4">
					<div class="card">
					
						<div class="card-body">
							<h5 class="card-title">{{ $usuario->nome }}</h5>
							<p class="card-text">{{ $usuario->nickname }}</p>
							<div class="row">
								<div class="col">
									<div class="input-group md-4">
										<select class="form-select" id="inputGroupSelect01" name="role">
											<option selected>{{ $usuario->role }}</option>
											<option value="admin">ADM</option>
											<option value="USER">user</option>
											<option value="professor">Professor</option>
											<option value="bolsista1">Bolsista Lvl.1</option>
											<option value="bolsista2">Bolsista Lvl.2</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="input-group flex-nowrap">
										<span class="input-group-text" id="addon-wrapping">@</span>
										<input type="text" class="form-control" name="role" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
									</div>
								</div>
							</div><br>
							<div class="row">
							<div class="form-group">
        						<label for="images">Escolher Imagem</label>
        						<input type="file" name="images[]" class="form-control" multiple>
    						</div>
							</div><br>
							<div class="row">
								<div class="col">
									<button type="button" class="btn btn-outline-danger">Banir <svg
											xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-person-slash" viewBox="0 0 16 16">
											<path
												d="M13.879 10.414a2.501 2.501 0 0 0-3.465 3.465zm.707.707-3.465 3.465a2.501 2.501 0 0 0 3.465-3.465m-4.56-1.096a3.5 3.5 0 1 1 4.949 4.95 3.5 3.5 0 0 1-4.95-4.95ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
										</svg></button>
										<button type="submit" class="btn btn-primary">Salvar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
		</center>
		<br><br>

	</form>
</div>

@endsection