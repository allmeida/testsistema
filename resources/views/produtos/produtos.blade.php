@extends('layout.app', ["current" => "produtos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>

@if(count($prod) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Data de criação</th>
                    <th>Data de alteração</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($prod as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->preco }}</td>
                    <td>{{ date('M j, Y h:ia', strtotime($p->created_at)) }}</td>
                    <td>{{ date('M j, Y h:ia', strtotime($p->updated_at)) }}</td>
                    <td>
                        <a href="/produtos/editar/{{$p->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/produtos/apagar/{{$p->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach
            </tbody>
        </table>
@endif
    </div>
    <div class="card-footer">
        <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
    </div>
</div>
@endsection
