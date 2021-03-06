<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControladorProduto extends Controller
{

    public function index()
    {
        $prod = Produto::all();
        $total = Produto::all()->count();
        return view('produtos.produtos', compact('prod', 'total'));
    }


    public function create()
    {
        $categorias = Categoria::all();
        return view('produtos.novoproduto', ['categorias'=>$categorias]);
    }


    public function store(Request $request)
    {
        $pro = Produto::create($request->all());
        return redirect('/produtos');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro = Produto::find($id);
        if(isset($pro)) {
            return view('produtos.editarproduto', compact('pro'));
        }
        return redirect('/produtos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pro = Produto::find($id);
        $pro->nome = $request->nome;
        $pro->preco = $request->preco;
        $pro->save();

        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Produto::find($id);
        if (isset($pro)) {
            $pro->delete();
        }
        return redirect('/produtos');
    }
}
