@extends('layouts.app-master') 
@section('content')

<div class="container">
        <div class="row">
            <div class="col">
                <img src="images/snoopy.png" style="border-radius: 50%; width: 180px; bottom: 0%; height: 180px;"
                    alt="">&ensp;&ensp;&ensp;
            </div>
            <div class="col">
                <h4>{{ $user->nome }}</h4>
                <div class="row">
                    <div class="col">
                        <p>{{ $user->nickname }}</p>
                    </div>
                    <div class="col">
                        <p type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Seguidores:
                            0</p>
                    </div>
                    <div class="col">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Seguindo: 2
                        </button>
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Seguindo</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                                <img src="images/snoopy.png"
                                                style="border-radius: 50%; width: 80px; bottom: 0%; height: 60px;"
                                                alt="">
                                            <div class="col">
                                                <p>juninho157</p>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-success">Seguir</button>
                                            </div>
                                        </div>
                                        <div class="divider">
                                            <hr class="divider">
                                        </div>
                                        <div class="row">
                                                <img src="images/snoopy.png"
                                                style="border-radius: 50%; width: 80px; bottom: 0%; height: 60px;"
                                                alt="">
                                            <div class="col">
                                                <p>juninho157</p>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-success">Seguir</button>
                                            </div>
                                        </div>
                                        <div class="divider">
                                            <hr class="divider">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-calendar" viewBox="0 0 16 16">
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                        </svg> {{ $user->created_at }}
                    </div>
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg> {{ $user->role }}
                    </div>
                </div>
            </div>
            <div class="col">
                <button type="button" class="btn btn-success">Seguir</button>


                <a href="editProfile.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path
                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd"
                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                    </svg></a>
            </div>
        </div>
        <div class="divider">
            <hr class="divider">
        </div>
        <div class="row">
            <div class="col">
                <p>Minhas postagens</p>
            </div>
            <div class="col">
                <p>Minhas Curtidas</p>
            </div>
            <div class="col">
                <p>Meus comentários</p>
            </div>
        </div>
        <div class="divider">
            <hr class="divider">
        </div>

        <div class="postagens">
            <center>
                <div class="card" style="width: 40%;">
                    <div class="card-body">
                        <p class="card-text">Este é meu terceiro post com comentário</p>
                    </div>
                    <img src="images/snoopy.png" class="card-img-top" style="height: 40%;" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                </svg>
                            </div>
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-chat-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                    <path
                                        d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                                </svg>
                            </div>
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-share" viewBox="0 0 16 16">
                                    <path
                                        d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </center>
        </div>

        @endsection