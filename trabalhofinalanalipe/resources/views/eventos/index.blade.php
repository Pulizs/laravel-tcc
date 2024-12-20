@extends('layouts.app-master') 

@section('content')

<div class="bg-light p-5 rounded">

    @if(auth()->user()->role == "admin" || auth()->user()->role == "professor" || auth()->user()->role == "bolsista1" || auth()->user()->role == "bolsista2")
        <a href="{{ route('eventos.create') }}"><button type="button" class="btn btn-primary">+ Novo Evento</button></a>
    @endif
    <br><br>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($eventos as $evento)
            <div class="col">
                <div class="card" style="width: 18rem;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eventoModal{{ $evento->id }}">
                    @foreach(json_decode($evento->images) as $image)
                        <img class="card-img-top" src="{{ asset($image) }}" alt="Card image cap">
                    @endforeach

                    <div class="card-body">
                        <h5 class="card-title">{{ $evento->titulo }}</h5>
                    </div>

                    <div class="card-body">
                        <p>{{ $evento->data }}</p>
                    </div>

                    <div class="card-body">
                        <p>{{ $evento->palestrante }}</p>
                    </div>

                    <div class="card-body">
                        <p>{{ $evento->conteudo }}</p>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="eventoModal{{ $evento->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $evento->titulo }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    @foreach(json_decode($evento->images) as $image) 
                                        <img src="{{ asset($image) }}" alt="Evento Image" style="width: 12rem;">
                                    @endforeach
                                </div>

                                <div class="col">
                                    <div class="row">
                                        <p><strong>Título:</strong> {{ $evento->titulo }}</p>
                                    </div>
                                    <div class="row">
                                        <p><strong>Data:</strong> {{ $evento->data }}</p>
                                    </div>
                                    <div class="row">
                                        <p><strong>Palestrante:</strong> {{ $evento->palestrante }}</p>
                                    </div>
                                    <div class="row">
                                        <p><strong>Conteúdo:</strong> {{ $evento->conteudo }}</p>
                                    </div>
                                    <div class="row">
                                        <p><strong>Local:</strong> {{ $evento->local }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection
