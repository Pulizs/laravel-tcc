@extends('layouts.app-master')


@section('content')


<style>
    /* Fundo claro */
    body.light-mode .bg-light {
        background-color: #f8f9fa !important;
        color: #000;
    }


    /* Fundo escuro */
    body.dark-mode .bg-light {
        background-color: #121212 !important;
        color: #fff;
    }


    /* Adicionando estilos de texto para garantir contraste */
    body.light-mode,
    body.dark-mode {
        color: inherit;
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
                            <div class="card" style="background-color: #D0AAD1;">
                                <span class="card-title">Materiais</span>
                                <p class="subtitle">Recomendação de documentários, literaturas e vídeos de todas as áreas da
                                    ciência. Confira os materiais</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="nav-link" href="{{ route('eventos.index') }}">
                        <div class="card text-center mb-3" style="width: 18rem;">
                            <div class="card" style="background-color: #D0AAD1;">
                                <span class="card-title">Eventos</span>
                                <p class="subtitle">Fique por dentro e não perca nenhum evento científico. Confira os novos
                                    eventos!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="nav-link" href="{{ route('postagens.index') }}">
                        <div class="card text-center mb-3" style="width: 18rem;">
                            <div class="card" style="background-color: #D0AAD1;">
                                <span class="card-title">Postagens</span>
                                <p class="subtitle">Confira e interaja com a nossa comunidade científica. Confira a
                                    comunidade</p>
                            </div>
                        </div>
                    </a>
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
            </div>
            <br>
        </center>


        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="nav-link" href="{{ route('livros.index') }}">
                        <div class="card text-center mb-3" style="width: 18rem;">
                            <div class="card" style="background-color: #D0AAD1;">
                                <span class="card-title">Materiais</span>
                                <p class="subtitle">Recomendação de documentários, literaturas e vídeos de todas as áreas da
                                    ciência. Confira os materiais</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="nav-link" href="{{ route('eventos.index') }}">
                        <div class="card text-center mb-3" style="width: 18rem;">
                            <div class="card" style="background-color: #D0AAD1;">
                                <span class="card-title">Eventos</span>
                                <p class="subtitle">Fique por dentro e não perca nenhum evento científico. Confira os novos
                                    eventos!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="nav-link" href="{{ route('postagens.index') }}">
                        <div class="card text-center mb-3" style="width: 18rem;">
                            <div class="card" style="background-color: #D0AAD1;">
                                <span class="card-title">Postagens</span>
                                <p class="subtitle">Confira e interaja com a nossa comunidade científica. Confira a
                                    comunidade</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endguest
</div>


<script>
    // Sincroniza o tema com a página para usuários autenticados e visitantes
    document.addEventListener('DOMContentLoaded', () => {
        const savedTheme = localStorage.getItem('theme') || 'light-mode';
        document.body.classList.add(savedTheme);
    });
</script>


@endsection