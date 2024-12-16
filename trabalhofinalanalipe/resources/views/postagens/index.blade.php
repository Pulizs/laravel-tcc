@extends('layouts.app-master') @section('content')


<div class="bg-light p-5 rounded">
    <a href="{{ route('postagens.create') }}"><button type="button" class="btn btn-primary">+ Novo Post</button></a>

    <br><br>

    <center>
        @foreach($postagem as $postagen)

        <div class="card" style="width: 40%;">
            <div class="card-header">
                <p class="text-start">{{ $postagen->user->nickname }}</p>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $postagen->titulo }}</p>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $postagen->conteudo }}</p>
            </div>
            <div class="card-body">
                @foreach(json_decode($postagen->images) as $image)
                <img src="{{ asset('storage/'.$image) }}" alt="" />
                @endforeach
            </div>


            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <button class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                <path
                                    d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                            </svg>

                        </button>

                    </div>
                    <div class="col">
                        <a class="btn" href="{{ route('postagens.show', $postagen->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-share" viewBox="0 0 16 16">
                                <path
                                    d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </div><br>
        @endforeach
    </center>
</div>
@endsection