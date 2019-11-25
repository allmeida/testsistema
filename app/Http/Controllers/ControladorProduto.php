<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Produto::all();
        $total = Produto::all()->count();
        return view('produtos', compact('prod', 'total'));
        //return view('produtos', ['produtos'=>$produtos]);
        //return view('produtos')->with (['produtos'=>$produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        //return view('novoproduto', compact('categorias'));
        return view('novoproduto', ['categorias'=>$categorias]);
        //return view('novoproduto')->with (['categorias'=>$categorias]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'nome' => 'required',
            'qtde' => 'required',
            'preco' => 'required',
            'categoria' => 'required'
        ]);

        try {
            DB::beginTransaction();
            $pro = new Produto();
            $pro->nome = $request->nome;
            $pro->qtde = $request->qtde;
            $pro->preco = $request->preco;


            if(is_array($request->categoria)) {
                foreach ($request->categoria as $c) {
                    $pro->categoria_id = $c[0];
                }
            }
            $pro->save();

        DB::commit();
        return redirect()->back()->with('success', "Produto adicionado com sucesso");
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage() . " " . $e->getFile() . " " . $e->getLine());
        }



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
            return view('editarproduto', compact('pro'));
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
        $pro->nome = $request->input('nome');
        $pro->qtde = $request->input('qtde');
        $pro->preco = $request->input('preco');
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
