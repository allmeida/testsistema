@extends('layout.app', ["current" => "usuarios"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/usuarios/{{$usuario->id}}" method="POST">
            @csrf
            <div class="form-group ">
            <label for="nome">Nome</label>
                <input class="form-control" id="nome" name="nome" type="text" value="{{ $usuario->nome }}">
            </div>
            <div class="form-group ">
            <label for="email">Email</label>
                <input class="form-control " id="email" type="text" name="email" value="{{ $usuario->email }}">
            </div>
            <div class="form-group ">
            <label for="password">Password</label>
                <input class="form-control " id="password" type="password" name="password" value="{{ $usuario->password }}">
            </div>
            <div class="form-group ">
            <label for="cep">Cep</label>
                <input class="form-control" onblur="pesquisacep(this.value);" id="cep" type="number" name="cep" value="{{ $usuario->cep }}">
            </div>
            <div class="form-group ">
            <label for="rua">Rua <span>*</span></label>
                <input class="form-control " id="rua" type="text" name="rua">
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    <div
</div>

@endsection
