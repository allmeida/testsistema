@extends('layout.app', ["current" => "usuarios"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/usuarios" method="POST">
            @csrf
            <div class="form-group ">
            <label for="nome">Nome</label>
                <input class="form-control" id="nome" name="nome" type="text" placeholder="Vendedor">
            </div>
            <div class="form-group ">
            <label for="email">Email</label>
                <input class="form-control " id="email" type="text" name="email" placeholder="Email">
            </div>
            <div class="form-group ">
            <label for="password">Password</label>
                <input class="form-control " id="password" type="password" name="password" placeholder="Senha">
            </div>
            <div class="form-group ">
            <label for="cep">Cep</label>
                <input class="form-control" onblur="pesquisacep(this.value);" id="cep" type="number" name="cep"  placeholder=" Cep: 00000000">
            </div>
            <div class="form-group ">
            <label for="rua">Rua</label>
                <input class="form-control " id="rua" type="text" name="rua" placeholder="Rua">
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </form>
    <div
</div>

@endsection
