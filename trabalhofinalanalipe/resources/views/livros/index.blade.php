@extends('layouts.app-master') @section('content')

<div class="bg-light p-5 rounded">

        <a href="{{ route('livros.index') }}"><button type="button" class="btn btn-primary">+ Novo Livro</button></a>
        
    <br><br>


    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($livros as $livro)

        <div class="col">
            <div class="card" style="width: 18rem;" type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                <img class="card-img-top" src="images/andarDoBedado.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">O Andar do Bêbado</h5>
                    <span class="badge text-bg-primary">Livro</span>
                    <span class="badge text-bg-warning">Verão</span>
                </div>
            </div>
        </div>

        @endforeach
    </div>

    @endsection