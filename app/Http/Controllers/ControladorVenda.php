<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Usuario;
use App\Venda;
use Illuminate\Http\Request;
use DB;

class ControladorVenda extends Controller
{

    public function index()
    {
        //$vendas = Venda::all();
        $vendas = Venda::join('produtos', 'vendas.produto_id', '=', 'produtos.id')
                        ->join('usuarios', 'vendas.usuario_id', '=', 'usuarios.id')
                        ->select('produtos.nome as nome_produto','usuarios.nome as nome_usuario')
                        ->get();

        return view('vendas.vendas', compact('vendas'));
    }


    public function create()
    {
        $produtos = Produto::query()
            ->orderBy('nome')
            ->get();
        $usuarios = Usuario::query()
            ->orderBy('nome')
            ->get();

        return view('vendas.novavenda',  compact('produtos', 'usuarios'));
    }


    public function store(Request $request)
    {
        $vendas = Venda::create($request->all());

        return redirect( '/vendas');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
