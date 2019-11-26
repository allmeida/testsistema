@extends('layout.app', ["current" => "usuarios"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Vendedores</h5>

@if(count($usuarios) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Cep</th>
                    <th>Rua</th>
                    <th>Data de criação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
     @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->password }}</td>
                    <td>{{ $usuario->cep }}</td>
                    <td>{{ $usuario->rua }}</td>
                    <td>{{ date('M j, Y h:ia', strtotime($usuario->created_at)) }}</td>
                    <td>
                        <a href="/usuarios/editar/{{$usuario->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/usuarios/apagar/{{$usuario->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach
            </tbody>
        </table>
@endif
    </div>
    <div class="card-footer">
        <a href="/usuarios/novo" class="btn btn-sm btn-primary" role="button">Novo Usuário</a>
    </div>
</div>



@endsection
