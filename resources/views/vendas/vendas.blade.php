@extends('layout.app', ["current" => "vendas"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Vendas de Produtos</h5>

@if(count($vendas) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Numero de Venda</th>
                    <th>Vendedor Responsável</th>
                    <th>Data da Venda</th>
                </tr>
            </thead>
            <tbody>
    @foreach($vendas as $venda)
                <tr>
                    <td>{{ $venda->id  }}</td>
                    <td>{{ $venda->numero_venda }}</td>
                    <td>{{ $venda->vendedor_responsavel }}</td>
                    <td>{{ date('M j, Y h:ia', strtotime($venda->created_at)) }}</td>
                </tr>
    @endforeach
            </tbody>
        </table>
@endif
    </div>
    <div class="card-footer">
        <a href="/vendas/novo" class="btn btn-sm btn-primary" role="button">Adicionar</a>
    </div>
</div>



@endsection
