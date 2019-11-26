@extends('layout.app', ["current" => "categorias"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/categorias" method="POST">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <div class="form-group">
                <label for="nome">Nome da Categoria</label>
                <input type="text" class="form-control" name="nome" 
                       id="nome" placeholder="Categoria">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>            
        </form>
    </div>
</div>

@endsection