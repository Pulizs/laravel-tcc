@extends('layouts.app-master') 
@section('content')

<div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Evento</th>
                    <th scope="col">Palestrante</th>
                    <th scope="col">Local</th>
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

    @endsection