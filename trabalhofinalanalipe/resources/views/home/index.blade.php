@extends('layouts.app-master')
 
@section('content')
 
 
	<div class="bg-light p-5 rounded">
   
	   @auth

		<center>
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{!! url('assets/images/banner.gif') !!}" class="d-block w-90" alt="..."
                        style=" height: 60vh; border-radius: 30px;">
                </div>
                <div class="carousel-item">
                    <img src="{!! url('assets/images/banner2.gif') !!}" class="d-block w-90" alt="..."
                        style=" height: 60vh; border-radius: 30px;">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-90" alt="..." style=" height: 60vh; border-radius: 30px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
    </center>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body" style="background-color: #D0AAD1;;">
                        <h5 class="card-title">Materiais</h5>
                        <p class="card-text">Recomendação de documentários, literaturas e videos de todas as áreas da ciência. 
                            Confira os materiais</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body" style="background-color: #D0AAD1;">
                        <h5 class="card-title">Eventos</h5>
                        <p class="card-text">Fique por dentro e não perca nenhum evento científico. Confira os novos
                            eventos!!</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body" style="background-color: #D0AAD1;">
                        <h5 class="card-title">Postagens</h5>
                        <p class="card-text">Confira e interaja com a nossa comunidade científica. Confira a comunidade
                            e faça sua primeira postagem!!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

       
    	@endauth
 
    	@guest
		<center>
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{!! url('assets/images/martegif.gif') !!}" class="d-block w-90" alt="..."
                        style=" height: 60vh; border-radius: 30px;">
                </div>
                <div class="carousel-item">
                    <img src="{!! url('assets/images/podcast1.png') !!}" class="d-block w-90" alt="..."
                        style=" height: 60vh; border-radius: 30px;">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-90" alt="..." style=" height: 60vh; border-radius: 30px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
    </center>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body" style="background-color: #D0AAD1;;">
                        <h5 class="card-title">Materiais</h5>
                        <p class="card-text">Recomendação de documentários, literaturas e videos de todas as áreas da ciência. 
                            Confira os materiais</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body" style="background-color: #D0AAD1;">
                        <h5 class="card-title">Eventos</h5>
                        <p class="card-text">Fique por dentro e não perca nenhum evento científico. Confira os novos
                            eventos!!</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body" style="background-color: #D0AAD1;">
                        <h5 class="card-title">Postagens</h5>
                        <p class="card-text">Confira e interaja com a nossa comunidade científica. Confira a comunidade
                            e faça sua primeira postagem!!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endguest
	</div>
@endsection
