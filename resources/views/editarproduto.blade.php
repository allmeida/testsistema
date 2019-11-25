@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos/{{$pro->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" class="form-control" name="nome" value="{{$pro->nome}}"
                       id="nome" placeholder="Produto">

                <label for="qtde">Quantidade</label>
                <input type="" class="form-control" name="qtde" value="{{$pro->qtde}}" 
                        id="qtde" placeholder="Quantidade">

                <label for="preco">Preço</label>
                <input type="number" class="form-control" name="preco" value="{{$pro->preco}}" 
                        id="preco" placeholder="Preço">

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>

@endsection