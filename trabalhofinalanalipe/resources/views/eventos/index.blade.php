@extends('layouts.app-master') 
@section('content')

<div class="bg-light p-5 rounded">

<a href="{{ route('eventos.create') }}"><button type="button" class="btn btn-primary">+ Novo Post</button></a>
<br><br>


<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Evento</th>
                <th scope="col">Palestrante</th>
                <th scope="col">Local</th>
            </tr>
        </thead>
        <tbody>
                @foreach($eventos as $evento)
                <tr>
                    <th scope="row">{{ $evento->data }}</th>
                    <td>{{ $evento->evento }}</td>
                    <td>{{ $evento->palestrante }}</td>
                    <td>{{ $evento->local }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    @endsection