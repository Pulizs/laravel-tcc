@extends('layouts.auth-master')
 
@section('content')
<!-- <center>
	<form method="post" action="{{ route('register.perform') }}">
 
    	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    	<img class="mb-4" src="{!! url('assets/images/ifpr_vertical.svg') !!}" alt="" width="202" height="187">
       
    	<h1 class="h3 mb-3 fw-normal">Cadastro de usuário</h1>
 
          	<div class="form-group form-floating mb-3 w-25 mx-auto">
        	<input type="text" class="form-control" name="nome" value="{{ old('nome') }}" placeholder="Nome" required="required" autofocus>
        	<label for="floatingNome">Nome</label>
        	@if ($errors->has('nome'))
            	<span class="text-danger text-left">{{ $errors->first('nome') }}</span>
        	@endif
    	</div>
 
    	<div class="form-group form-floating mb-3 w-25 mx-auto">
        	<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email@exemplo.com" required="required">
        	<label for="floatingEmail">E-mail</label>
        	@if ($errors->has('email'))
            	<span class="text-danger text-left">{{ $errors->first('email') }}</span>
        	@endif
    	</div>
       
    	<div class="form-group form-floating mb-3 w-25 mx-auto">
        	<input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
        	<label for="floatingPassword">Senha</label>
        	@if ($errors->has('password'))
            	<span class="text-danger text-left">{{ $errors->first('password') }}</span>
        	@endif
    	</div>
 
    	<div class="form-group form-floating mb-3 w-25 mx-auto">
        	<input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
        	<label for="floatingConfirmPassword">Confirme a senha</label>
        	@if ($errors->has('password_confirmation'))
            	<span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
        	@endif
    	</div>
 
    	<div class="form-group form-floating mb-3 mx-auto">
        	<button class="btn btn-lg btn-primary w-25 mx-auto" type="submit">Registrar</button>
        	<br/><br/>
        	<a href="{{ route('home.index') }}" class="btn btn-lg btn-secondary w-25 mx-auto">Página Inicial</a>
          	</div>
       
    	@include('auth.partials.copy')
	</form>
	</center> -->

	<div class="container">
		<center>
		<form method="post" action="{{ route('register.perform') }}">

			<input type="hidden" name="_token" value="{{ csrf_token() }}" />


				<div class="card" style="width: 50%;">
					<div class="card-body">
						<p class="card-text">Criando Conta <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
								fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
								<path
									d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
								<path
									d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
							</svg></p>
					</div>
					<div class="card-body">
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
									width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
									<path
										d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
								</svg></span>
							<input type="text" class="form-control" placeholder="Email" aria-label="email"
							name="email" value="{{ old('email') }}" aria-describedby="basic-addon1" required="required">
								@if ($errors->has('email'))
								<span class="text-danger text-left">{{ $errors->first('email') }}</span>
							@endif
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
									width="16" height="16" fill="currentColor" class="bi bi-person-vcard"
									viewBox="0 0 16 16">
									<path
										d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5" />
									<path
										d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z" />
								</svg></span>
							<input type="text" class="form-control" placeholder="Nome de Usuário"
							name="nickname" value="{{ old('nickname') }}"  aria-label="nickname" required="required">
							@if ($errors->has('nickname'))
								<span class="text-danger text-left">{{ $errors->first('nickname') }}</span>
							@endif
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
									width="16" height="16" fill="currentColor" class="bi bi-person-fill"
									viewBox="0 0 16 16">
									<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
								</svg></span>
							<input type="text" class="form-control" placeholder="Nome Completo"
							name="nome" value="{{ old('nome') }}" aria-label="Usuário Completo" aria-describedby="basic-addon1">
								@if ($errors->has('nome'))
								<span class="text-danger text-left">{{ $errors->first('nome') }}</span>
							@endif
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
									width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-front"
									viewBox="0 0 16 16">
									<path
										d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z" />
									<path
										d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
								</svg></span>
							<input type="text" class="form-control" placeholder="Matrícula (se tiver)"
								aria-label="Usuário ou email" aria-describedby="basic-addon1">
								
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
									width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
									<path
										d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
								</svg></span>
							<input type="text" class="form-control" placeholder="Número de celular"
							name="celular" value="{{ old('celular') }}"  aria-label="Usuário ou email" aria-describedby="basic-addon1">
								@if ($errors->has('celular'))
								<span class="text-danger text-left">{{ $errors->first('celular') }}</span>
							@endif
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
									width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
									<path
										d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5" />
									<path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
								</svg></span>
							<input type="text" class="form-control" placeholder="Senha" aria-label="Senha"
							name="password" value="{{ old('password') }}" aria-describedby="basic-addon1">
								@if ($errors->has('password'))
								<span class="text-danger text-left">{{ $errors->first('password') }}</span>
							@endif
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<button type="submit" class="btn btn-success">Criar Conta <svg
										xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-person-fill-check" viewBox="0 0 16 16">
										<path
											d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
										<path
											d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
									</svg></button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-primary">Conferir Dados <svg
										xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-check2-circle" viewBox="0 0 16 16">
										<path
											d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
										<path
											d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
									</svg></button>
							</div>
						</div>

					</div>
				</div>
	
		</form>
		</center>
	</div>
	@endsection
