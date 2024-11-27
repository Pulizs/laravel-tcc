@extends('layouts.app-master')
 
@section('content')
 
    <style>
card {
  width: 250px;
  height: 200px;
  border-radius: 15px;
  background: rgba(105, 13, 197, 0.103);
  display: flex;
  flex-direction: column;
  position: relative;
  overflow: hidden;
}

.card::before {
  content: "";
  height: 100px;
  width: 100px;
  position: absolute;
  top: -40%;
  left: -20%;
  border-radius: 50%;
  border: 35px solid rgba(255, 255, 255, 0.102);
  transition: all .8s ease;
  filter: blur(.5rem);
}

.text {
  flex-grow: 1;
  padding: 15px;
  display: flex;
  flex-direction: column;
  color: aliceblue;
  font-weight: 900;
  font-size: 1.2em;
}

.subtitle {
  font-size: 1em;
  font-weight: 300;
  color: #000000
}

.btn {
  border: none;
  width: 84px;
  height: 35px;
  background-color: rgba(247, 234, 234, 0.589);
  display: flex;
  align-items: center;
  justify-content: center;
}


.btn:hover {
  background-color: rgb(247, 234, 234);
}

.card:hover::before {
  width: 140px;
  height: 140px;
  top: -30%;
  left: 50%;
  filter: blur(0rem);
}
    </style>
 
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
                <a class="nav-link" href="{{ route('livros.index') }}">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card" style="background-color: #D0AAD1;;">
                        <span class="card-title">Materiais</span>
                        <p class="subtitle">Recomendação de documentários, literaturas e videos de todas as áreas da ciência. 
                            Confira os materiais</p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <a class="nav-link" href="{{ route('eventos.index') }}">
                    <div class="card" style="background-color: #D0AAD1;">
                        <span class="card-title">Eventos</span>
                        <p class="subtitle">Fique por dentro e não perca nenhum evento científico. Confira os novos
                            eventos!!</p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <a class="nav-link" href="{{ route('postagens.index') }}">
                        <div class="card" style="background-color: #D0AAD1;">
                            <span class="card-title">Postagens</span>
                            <p class="subtitle">Confira e interaja com a nossa comunidade científica. Confira a comunidade</p>
                    </div>
                    </a>
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
                    <img src="{!! url('assets/images/banner1.gif') !!}" class="d-block w-90" alt="..."
                        style=" height: 60vh; border-radius: 30px;">
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
                <a class="nav-link" href="{{ route('livros.index') }}">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card" style="background-color: #D0AAD1;;">
                        <span class="card-title">Materiais</span>
                        <p class="subtitle">Recomendação de documentários, literaturas e videos de todas as áreas da ciência. 
                            Confira os materiais</p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <a class="nav-link" href="{{ route('eventos.index') }}">
                    <div class="card" style="background-color: #D0AAD1;">
                        <span class="card-title">Eventos</span>
                        <p class="subtitle">Fique por dentro e não perca nenhum evento científico. Confira os novos
                            eventos!!</p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card text-center mb-3" style="width: 18rem;">
                    <a class="nav-link" href="{{ route('postagens.index') }}">
                        <div class="card" style="background-color: #D0AAD1;">
                            <span class="card-title">Postagens</span>
                            <p class="subtitle">Confira e interaja com a nossa comunidade científica. Confira a comunidade</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @endguest
	</div>
@endsection
