@extends('layouts.app-master') 
@section('content')

<div class="bg-light p-5 rounded">

<a href="{{ route('eventos.create') }}"><button type="button" class="btn btn-primary">+ Novo Post</button></a>
<br><br>

@foreach($eventos as $evento)

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ $evento->data }}</th>
                    <th scope="col">{{ $evento->evento }}</th>
                    <th scope="col">{{ $evento->palestrante }}</th>
                    <th scope="col">{{ $evento->local }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">25/05/2024</th>
                    <td>Feira de Ciências</td>
                    <td>Otto</td>
                    <td><a
                            href="https://www.google.com/maps/dir/-25.5000668,-49.2740054/ifpr+curitiba/@-25.4691351,-49.3030148,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x94dce45db38614eb:0x9adf6f5ffe161bac!2m2!1d-49.2616307!2d-25.4399999?entry=ttu">
                            IFPR CURITIBA
                        </a></td>
                </tr>
                <tr>
                    <th scope="row">21/06/2024</th>
                    <td>Teste</td>
                    <td>Thornton</td>
                    <td><a
                            href="https://www.google.com/maps/dir/-25.5000668,-49.2740054/ifpr+curitiba/@-25.4691351,-49.3030148,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x94dce45db38614eb:0x9adf6f5ffe161bac!2m2!1d-49.2616307!2d-25.4399999?entry=ttu">
                            IFPR CURITIBA
                        </a></td>
                </tr>
                <tr>
                    <th scope="row">19/08/2024</th>
                    <td>Teste</td>
                    <td>Teste</td>
                    <td><a
                            href="https://www.google.com/maps/dir/-25.5000668,-49.2740054/ifpr+curitiba/@-25.4691351,-49.3030148,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x94dce45db38614eb:0x9adf6f5ffe161bac!2m2!1d-49.2616307!2d-25.4399999?entry=ttu">
                            IFPR CURITIBA
                        </a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endforeach

    @endsection