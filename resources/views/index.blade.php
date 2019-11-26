@extends('layout.app', ["current" => "home"])

@section('body')



<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card bg-light border border-secondary m-25">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de vendedores</h5>
                    <p class="card=text">
                        Aqui você cadastra todos os seus vendedores.
                    </p>
                    <hr>
                    <a href="/usuarios" class="btn btn-primary">Cadastre seus vendedores</a>
                </div>
            </div>
            <div class="card bg-light border border-secondary m-25">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de produtos</h5>
                    <p class="card=text">
                        Aqui você cadastra todos os seus produtos.
                    </p>
                    <hr>
                    <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                </div>
            </div>
            <div class="card bg-light border border-secondary w-25">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Categorias</h5>
                    <p class="card=text">
                        Cadastre as categorias dos seus produtos.
                    </p>
                    <hr>
                    <a href="/categorias" class="btn btn-primary">Cadastre suas categorias</a>
                </div>
            </div>
            <div class="card bg-light border border-secondary w-25">
                <div class="card-body">
                    <h5 class="card-title">Controle de Vendas</h5>
                    <p class="card=text">
                        Visualiar total mensal de vendas realizadas.
                    </p>
                    <hr>
                    <a href="/vendas" class="btn btn-primary">Controle de Vendas</a>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
