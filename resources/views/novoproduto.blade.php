@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" class="form-control" name="nome"
                        id="nome" placeholder="Produto">

                <label for="qtde">Qtde</label>
                <input type="number" class="form-control" name="qtde"
                        id="qtde" placeholder="Quantidade">

                <label for="preco">Preço</label>
                <input type="text" class="form-control" name="preco"
                        id="preco" placeholder="Preço do produto">

            </div>
            <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <select name="categoria[]" id="categoria" class="form-control" required>
                        <option value="" selected disabled>SELECIONE</option>
                        @if(!empty($categorias))
                            @foreach($categorias as $c)
                                <option value="{{$c->id}}">{{$c->nome}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </form>
    </div>
</div>

@endsection