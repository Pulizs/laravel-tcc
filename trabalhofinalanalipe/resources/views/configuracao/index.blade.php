@extends('layouts.app-master') 
@section('content')

<div class="container">
        <h1 style="font-family: Quicksand;">Configurações</h1>
        <br><br>
        <div class="row">
            <div class="col-md-3">
                <label for="inputEmail4" class="form-label">Alterar Email</label>
                <input type="text" class="form-control" placeholder="seuemail@gmail.com" aria-label="username">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="inputEmail4" class="form-label">Alterar Telefone</label>
                <input type="text" class="form-control" placeholder="(41) 00000-0000" aria-label="username">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="inputEmail4" class="form-label">Alterar Senha</label>
                <input type="text" class="form-control" aria-label="username">
            </div>
        </div><br>
        <div class="row">
            <h4 style="font-family: Quicksand;">Aparência</h4>
            <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckDefault">Modo Escuro</label>
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
              </div>
        </div><br>
        <div class="row">
            <h4 style="font-family: Quicksand;">Notificações</h4>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckDefault">Alertas de novas postagens de materiais por email</label>
              </div>
        </div><br>
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-success">Salvar</button>
                <button type="button" class="btn btn-outline-secondary">Cancelar</button>
            </div>
        </div><br>
    </div>

    @endsection