@extends('layout.app', ["current" => "vendas"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/vendas" method="POST">
            @csrf
            <div class="form-group">
                <label for="produto">Produto</label>
                <select name="produto_id" id="produto_id" class="form-control">
                    @foreach($produtos as $produto)
                        <option value= "{{ $produto->id }}"> {{ $produto->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="vendedor">Vendedores</label>
                <select name="usuario_id" id="usuario_id" class="form-control">
                    @foreach($usuarios as $usuarios)
                        <option value= "{{ $usuarios->id }}"> {{ $usuarios->nome }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary" type="submit">Adicionar</button>
        </form>
    <div
</div>

@endsection
