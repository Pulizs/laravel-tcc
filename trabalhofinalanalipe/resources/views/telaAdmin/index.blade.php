@extends('layouts.app-master') @section('content')

<h2 class='text-center'>Controle de Usuários</h2>
<form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
    <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
        </svg></button>
</form>
<br>
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($users as $user)
    <center>
        <div class="col">
            <div class="card">
                <!-- <img src="images/test4.jpeg" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">{{ $user->nome }}</h5>
                    <p class="card-text">{{ $user->nickname }}</p>
                    <div class="row">
                        <div class="col">
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ $user->role }}
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item active">ADM</a></li>
                                    <li><a class="dropdown-item ">Professor</a></li>
                                    <li><a class="dropdown-item">Bolsista Lv.2</a></li>
                                    <li><a class="dropdown-item">Bolsista Lv.1</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <a href="alterarUsuario.html"><button type="button"
                                    class="btn btn-success">Alterar</button></a>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger">Banir <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-slash" viewBox="0 0 16 16">
                                    <path
                                        d="M13.879 10.414a2.501 2.501 0 0 0-3.465 3.465zm.707.707-3.465 3.465a2.501 2.501 0 0 0 3.465-3.465m-4.56-1.096a3.5 3.5 0 1 1 4.949 4.95 3.5 3.5 0 0 1-4.95-4.95ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                </svg></button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </center>
    @endforeach
</div>
@endsection